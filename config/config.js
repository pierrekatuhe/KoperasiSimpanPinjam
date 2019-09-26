var base_url = 'http://localhost/KoperasiSimpanPinjam/';

//sweet alert  ---------------------------------------------------
function pesan_error(title, text, url="") {
    Swal.fire({
        type: 'error',
        title: title,
        text: text
    }).then(function () {
        if (url !== "") {
            window.location = base_url+url;
        }

    });
}

function pesan_tunggu(pesan="Silahkan tunggu . . .") {
    Swal.fire({
        type: 'info',
        title: pesan,
        showCancelButton: false, // There won't be any cancel button
      showConfirmButton: false // There won't be any confirm button
    });
}

function pesan_berhasil_swal(title, text, url = "") {
    Swal.fire({
        type: 'success',
        title: title,
        text: text
    }).then(function () {
        if (url == "") {
            location.reload();
        } else {
            window.location = url;
        }

    });
}

async function pesan_confirm(title, text, tombol_text="Okay") {
    //fungsi ini return true or undefined/null untuk fungsi logic 
    /*
        CARA MENGGUNAKAN FUNGSI INI
        pesan_confirm("Apakah anda yakin?", "Data yang telah dihapus tidak dapat dikembalikan", "Ya, Hapus").then((result) => {
            //eksekusi
            console.log(result);
        });
    */
        let promise = new Promise((resolve, reject) => {
             Swal.fire({
              title: title,
              text: text,
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: tombol_text
            }).then((result) => {
               resolve(result.value);
            });
         });

        let result = await promise; // wait till the promise resolves (*)
        return result;
       
}

// ENd sweet alert  ---------------------------------------------------


//Ajax  simple
function simple_ajax(datax, url_api, lokasi_berhasil = "", pesan_berhasil = "", pesan_gagal = "", ext_data = "", title_berhasil = "Berhasil!", title_gagal = "Gagal!") {
	/*
	var datax -> data dari submit (bentuknya string) 
	var url -> url eksekusi (.php)
	var lokasi berhasil -> jika berhasil

	--optional--
	var pesan berhasil  -> pesan jika berhasil
	var pesan gagal -> pesan jika gagal
	var ext_data -> jika ada tambahan data untuk submit harus pake & didepan datanya
	var title_berhasil -> title sweet alert jika berhasil
	var title_gagal -> title sweet alert jika gagal

	NB : data dikirimkan dengan method POST
	*/
    
    $.ajax({
        type: 'POST',
        url: url_api,
        data: datax + ext_data,
        beforeSend: function(){
          pesan_tunggu(); //ini biar nampak loading nya
        },
        success: function (data) {
          console.log(data);
            swal.close();
            if (data == '1') {
                //pesan(data);
                if (pesan_berhasil == "") {
                    if (lokasi_berhasil == "") {
                        location.reload();
                    } else {
                        window.location = lokasi_berhasil;
                    }
                } else {
                    pesan_berhasil_swal(title_berhasil, pesan_berhasil, lokasi_berhasil);
                }

            } else {
                pesan_error(title_gagal, pesan_gagal);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
    });

}

function ajax_test(datax, url_api, pesan_berhasil = "", pesan_gagal = "", title_berhasil = "Berhasil!", title_gagal = "Gagal!") {

    $.ajax({
        type: 'POST',
        url: url_api,
        data: datax,
        success: function (data) {
            if (data == '1') {
                //pesan(data);
                Swal.fire({
                    type: 'success',
                    title: title_berhasil,
                    text: pesan_berhasil
                }).then(function () { 
                    window.location.reload();
                });
            } else {
                pesan_error(title_gagal, pesan_gagal);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
    });

}


//---------------------------------------

// Select 2 ---------------------------------------------
/*$(document).ready(function() {
    $('.dim-select').select2();
    $('.dim-select').removeAttr('tabindex');
    $('.dim-select').select2({
        dropdownParent: $("#exampleModal")
     });
});*/
//end select 2--------------------------------------------------------

// Datetimepicker ------------------------------------------

/*$(document).ready(function() {
     $('.dim-datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            useCurrent: false,
            sideBySide: true
        });
});
*/

// end dtp -----------------------------------------------

//get data dengan ajax untuk dimasukkan kedalam div ------------------------
function get_with_ajax(datax="", url_api, append_div_id = "") {
    /*
    var datax -> data (bentuknya string) yang digunakan untuk WHERE SQL
    var url -> url eksekusi (.php)
    var append_div_id -> id dari div yang akan direplace

    NB : data dikirimkan dengan method POST
    */

    $.ajax({
        type: 'POST',
        url: url_api,
        data: datax,
        success: function (data) {
            $("#"+append_div_id).empty();
            $("#"+append_div_id).append(data);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
    });
}

// variable untuk tampung id posisi
var tmp_id_posisi ="";
function chg_tmp_id_posisi(id_posisi){
  tmp_id_posisi = id_posisi;
    console.log(tmp_id_posisi);
}

//fungsi untuk change checkbox id posisi pada tes evaluasi
function chg_checkbox_posisi(){
  var id = "#"+tmp_id_posisi;
  console.log(id);
  $(id).prop('checked', true);
}



//submit ajax dengan upload file
function ajax_with_upload(datax, url_api, jenis_input="",  lokasi_berhasil = "", pesan_berhasil = "", pesan_gagal = "", ext_data = "", title_berhasil = "Berhasil!", title_gagal = "Gagal!") {
    /*
    var datax -> data dari submit (bentuknya string) 
    var url -> url eksekusi (.php)
    var lokasi berhasil -> jika berhasil

    --optional--
    var pesan berhasil  -> pesan jika berhasil
    var pesan gagal -> pesan jika gagal
    var ext_data -> jika ada tambahan data untuk submit harus pake & didepan datanya
    var title_berhasil -> title sweet alert jika berhasil
    var title_gagal -> title sweet alert jika gagal
    var jenis input -> kosong = file biasa, 'test-evaluasi' = file audio dari tes evaluasi
    var test_evaluasi -> untuk change

    NB : data dikirimkan dengan method POST
    RETURN 1/0

    gunakan -> new FormData(this) -> untuk var datax , contoh tambah siswa
    */
    console.log(datax);
        
    $.ajax({
         url:url_api, //URL submit
         type:"POST", //method Submit
         data: datax, //penggunaan FormData
         processData:false,
         contentType:false,
         cache:false,
         async:false,
          success: function(data){
              if(data=='1'){
                if(jenis_input == "test-evaluasi"){
                    chg_checkbox_posisi();
                }
                pesan_berhasil_swal(title_berhasil, pesan_berhasil, lokasi_berhasil);
                $('#exampleModal').modal('hide');
                return 0;
              }else if(data=='nofile'){
                 pesan_error("Gagal Upload File!", "File tidak ditemukan");
              }else if(data=='errfile'){
                 pesan_error("Gagal Upload File!", "File gagal diunggah");
              }else if(data=='errfilesize'){
                 pesan_error("Gagal Upload File!", "Maaf, Ukuran File terlalu besar");
              }else if(data=='errfiletype'){
                 pesan_error("Gagal Upload File!", "Maaf, File tidak diperbolehkan");
              }else{
                 pesan_error(title_gagal, pesan_gagal);
              }
               
         },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
       });

}

function cek_formdata(data){

  console.log(data);
}

//Ajax  test evaluasi
function test_evaluasi_ajax(datax, url_api) {
  /*
  ajax test evaluasi , yang membedakan sama simple ajax => logic setelah berhasil simpan, yaitu return id variasi
  var datax -> data dari submit (bentuknya string) 
  var url -> url eksekusi (.php)
  var lokasi berhasil -> jika berhasil

  --optional--
  var pesan berhasil  -> pesan jika berhasil
  var pesan gagal -> pesan jika gagal
  var ext_data -> jika ada tambahan data untuk submit harus pake & didepan datanya
  var title_berhasil -> title sweet alert jika berhasil
  var title_gagal -> title sweet alert jika gagal

  NB : data dikirimkan dengan method POST
  */

    $.ajax({
        type: 'POST',
        url: url_api,
        data: datax + ext_data,
        success: function (data) {
            if (data == '0' || data == '') {
                pesan_error(title_gagal, pesan_gagal);
                return 0;
            } else {
                return data;
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            pesan_error("Gagal!", errorThrown);
        }
    });

}