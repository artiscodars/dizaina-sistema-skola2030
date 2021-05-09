<?php
$parent = "komponentes";
$title = "Izlecošie paziņojumi";

include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <div class="bd-example">

                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="opacity:1">
                    <div class="toast-header">

                        <strong class="me-auto">Paziņojuma virsraksts</strong>
                        <small>3 minūtes atpakaļ</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Šeit paziņojuma teksts ne pārāk garš.
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>ondary" data-bs-dismiss="modal">Aizvērt</button>
                                <button type="button" class="btn btn-primary">Izpildīt</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bd-example">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Izsaukt modālo logu
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modālā loga nosaukums</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Šeit modālā loga saturs
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Aizvērt</button>
                                    <button type="button" class="btn btn-primary">Saglabāt</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>