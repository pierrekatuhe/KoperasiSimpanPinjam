<?php
include 'config/config.php';
include 'template/header.php';

?>

<!-- ============ Body content start ============= -->
<div class="">
    
    

    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="lightSlider" data-item="6" data-item-xl="4" data-item-md="2" data-item-sm="1" data-pause="7000" data-pager="false" data-auto="true"
                 data-loop="true">
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">Firewall</h6>
                        <i class="icon-security s-48 text-success"></i>
                        <div class="mt-3"><span class="badge badge-success r-30"><i
                                class="icon-check mr-2"></i> Runing</span></div>
                    </div>
                </div>
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">Backups</h6>
                        <i class="icon-database s-48"></i>
                        <div class="mt-3"><span class="badge badge-success r-30"><i
                                class="icon-check mr-2"></i>Enabled</span></div>
                    </div>
                </div>
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">Apache Server</h6>
                        <i class="icon-server s-48"></i>
                        <div class="mt-3"><span class="badge badge-danger r-30"><i
                                class="icon-close mr-2"></i>Stopped</span></div>
                    </div>
                </div>
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">FTP Server</h6>
                        <i class="icon-data_usage s-48"></i>
                        <div class="mt-3"><span class="badge badge-success r-30"><i
                                class="icon-check mr-2"></i>Runing</span></div>
                    </div>
                </div>
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">My SQL</h6>
                        <i class="icon-terrain s-48"></i>
                        <div class="mt-3"><span class="badge badge-success r-30"><i
                                class="icon-check mr-2"></i>Runing</span></div>
                    </div>
                </div>
                <div>
                    <div class="white text-center p-4">
                        <h6 class="mb-3">Mail Server</h6>
                        <i class="icon-chat s-48"></i>
                        <div class="mt-3"><span class="badge badge-warning r-30 "><i
                                class="icon-exclamation-triangle mr-2"></i>Hold</span></div>
                    </div>
                </div>
            </div>
            <div class="white my-3">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <div class="card no-b">
                            <div class="card-header white">
                                <h6> CPU LIVE STATUS </h6>
                            </div>
                            <div id="interactive" style="height: 350px;"></div>
                        </div>
                        <hr>
                        <div class="card no-b">
                            <div class="card-header white">
                                <h6> CRONE JOBS</h6>
                            </div>
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="checkedAll" class="custom-control-input"
                                                           type="checkbox"><label class="custom-control-label"
                                                                                  for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>USER NAME</th>
                                            <th>ITEMS</th>
                                            <th>INCOME</th>
                                            <th>PHONE</th>
                                            <th>STATUS</th>
                                            <th>ROLE</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_1"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>256</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> Inactive</td>
                                            <td><span class="r-3 badge badge-success ">Administrator</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_2"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-b  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Blexander Pierce</strong>
                                                    </div>
                                                    <small> blexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>9,500</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span> Inactive</td>
                                            <td><span class="r-3 badge badge-warning">Subscriber</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_3"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-m  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Mlexander Pierce</strong>
                                                    </div>
                                                    <small>mlexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                            <td><span class="r-3 badge badge-warning">Seller</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_4"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_4"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-y  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Ylexander Pierce</strong>
                                                    </div>
                                                    <small>Ylexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-danger"></span> Suspended</td>
                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_5"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="assets/img/dummy/u5.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                            <td><span class="r-3 badge badge-warning">Seller</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_6"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_6"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-p  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Plexander Pierce</strong>
                                                    </div>
                                                    <small>plexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input checkSingle" id="user_id_7"
                                                           required="" type="checkbox"><label class="custom-control-label"
                                                                                              for="user_id_7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="assets/img/dummy/u7.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_10" required><label
                                                        class="custom-control-label" for="user_id_10"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="assets/img/dummy/u1.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>
                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span> Active</td>
                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Widget Start -->
                    <div class="col-md-3 b-l">
                        <div class="card no-b">
                            <div class="card-header white">
                                <h6> Usage </h6>
                            </div>
                            <div class="p-5" style="height: 400px">
                                <canvas
                                        data-chart="chartJs"
                                        data-chart-type="pie"
                                        data-dataset="[
                                                            [75, 50],
                                                            [25, 50],
                                                        ]"
                                        data-labels="[['Disk'],['Database']]"
                                        data-dataset-options="[
                                                        {
                                                            label: 'Disk',
                                                            backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                            ],

                                                        },
                                                        {
                                                            label: 'Database',
                                                            backgroundColor: [
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            ],

                                                        },

                                                        ]"
                                >
                                </canvas>
                            </div>
                            <div class="card-header white">
                                <h6> Progress </h6>
                            </div>
                            <div class="card-body pt-0">
                                <div class="my-3">
                                    <small>25% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>45% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;"
                                             aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>60% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>75% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                             aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <small>100% Complete</small>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 100%;"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card todo-widget no-b">
                            <div class="card-header white">
                                <h6> TO-DO LIST</h6>
                            </div>
                            <div class="card-body p-0 slimScroll" data-height="250">
                                <ul class="list-group list-group-striped no-b">
                                    <li class="list-group-item list-group-item-action">
                                    <span class="float-right">
                                        <i class="icon-close2 text-danger"></i>
                                    </span>Submit Research Paper
                                        <span class="badge badge-primary r-3 ml-3">Urgent Task</span>
                                    </li>
                                    <li class="list-group-item list-group-item-action done">
                                    <span class="float-right">
                                        <i class="icon-close2 text-danger"></i>
                                    </span>Prepare Last COM-101 Presentation
                                    </li>
                                    <li class="list-group-item list-group-item-action done">
                                    <span class="float-right">
                                        <i class="icon-close2 text-danger"></i>
                                    </span>Begin to learn one: Node, Angular, Express
                                        <span class="badge badge-success r-3 ml-3">Done</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer white">
                                <div class="input-group">
                                    <input id="new-event" type="text" class="form-control r-30 light"
                                           placeholder="Add A New To-Do">
                                    <div class="input-group-btn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Widget End -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============ Body content End ============= -->

<?php include 'template/footer.php'; ?>