<!-- Content Row -->
<div class="row">
    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <a href="viewallunreadmessages">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            New Messages</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getUnreadMessageCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <a href="allalerts">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Notification</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters-> getUnreadLogsCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bell fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <a href="manageproduct">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getProductCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box-open fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <a href="category">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Category</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getCategoryCount();?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <a href="subscribers">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Subscribers</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getSubscribersCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bell fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
            <a href="team">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Team</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getTeamCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <a href="services">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Services</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getServicesCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hands fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <a href="career">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            New Resumes.</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getNewResumeCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-graduation-cap fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <a href="backup">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                           Backup</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getBackupFilesCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hdd fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-xl-3 col-md-3 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <a href="faq">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            FAQ</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $counters->getFaqCount(); ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-question fa-2x"></i>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>

    

   
   
</div>

<!-- Content Row -->