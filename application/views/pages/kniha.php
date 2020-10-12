<!DOCTYPE html>
<html>
    <head>
        <title>Maturita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/mycss.css');?>" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
                    <div class="row">
                    <?php foreach($knihy as $row): ?>
                        <div class="card text-white bg-primary ml-3 mr-3 mb-2 mt-2" id="card" style="box-align: center;">
                            <div class="card-body">
                                <h1 class="card-title"><?php echo $row->nazev_knihy ?></h5>
                                <h5 class="card-subtitle mb-3"><?php echo $row->autor ?></h5>
                                <h5 class="card-subtitle mb-3"><?php echo $row->kategorie ?></h5>
                                <p class="card-text mb-3"><?php echo $row->anotace ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
                <button type="button" class="btn btn-block btn-lg btn-primary"><a href="<?php echo base_url("dila/"); ?>" class="text-white">Zpět na předchozí stranu</a></button>
    </div>   
    </body>
</html>