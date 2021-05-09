<?php
$parent = "komponentes";
$title = "Info lodziņi ";

include '../includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $title;?></h1>

            <h2>Izlacošais lodziņš ar virsrakstu</h2>

            <div class="bd-example">

                <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="popover"
                    title="Info lodziņa virsraksts"
                    data-bs-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis suscipit ac felis id viverra. Integer id lectus ultrices, faucibus ante sit amet, pulvinar metus. Aliquam pellentesque ut diam a sollicitudin. ">Uzspied,
                    lai apskatītos info lodziņu</button>

            </div>

            <h2>Izlacošais lodziņš bez virsraksta un to novietojums pret pogu</h2>

            <div class="bd-example">
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="right" data-bs-content="Lodziņš pa labi">
                    Pa labi
                </button>
            </div>

            <div class="bd-example">
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="bottom" data-bs-content="Lodziņš uz leju">
                    Uz leju
                </button>
            </div>

            <div class="bd-example">
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="left" data-bs-content="Lodziņš pa kreisi">
                    Pa kreisi
                </button>
            </div>

            <div class="bd-example">
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="top" data-bs-content="Lodziņš uz augšu">
                    Uz augšu
                </button>
            </div>

        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>