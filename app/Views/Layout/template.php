<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>CRUD</title>   
</head>
<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama Kelompok</td>
                    <td>:</td>
                    <td> Ariani/David/Ika/Natasha</td>
                </tr>
                <tr>
                    <td>Mata Kuliah </td>
                    <td>:</td>
                    <td> Praktikum Web Programing</td>
                </tr>
            </table>
        </nav>
    </header>
<?= $this->renderSection('content') ?>
   