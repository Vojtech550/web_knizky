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
            <div class="column">
                <table class="table table-striped table-bordered  col-12">
                <thead>
                    <tr>
                        <th>Autor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //$query = $this->db->query("SELECT ctenar.jmeno, ctenar.prijmeni, bydliste.nazev, ctenar.registrace from ctenar, bydliste where ctenar.id = bydliste.id order by ctenar.jmeno;");
                    foreach ($knihy as $row): ?>
                    <tr>
                    <td><?= $row->autor?></td>   
                    </tr>
                    <?php endforeach; ?> 
                </tbody>
                </table>
            </div>
    </div>
    </body>
</html>