<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome =$_GET['nome'];
        $cognome =$_GET['cognome'] ;
        $data_nascita =$_GET['data_nascita'];
        $ora_arrivo_casa =$_GET['ora_arrivo_casa'] ;
        $mezzo =$_GET['mezzo'];
        
        $attivita = [];
        if (isset($_GET['corso_inglese'])) {
            $attivita[] = 'corso di inglese';
        }
        if (isset($_GET['corso_teatro'])) {
            $attivita[] = 'corso di teatro';
        }
        if (isset($_GET['attivita_sportive'])) {
            $attivita[] = 'attività sportive';
        }
        if (empty($attivita)) {
            $attivita_str = "Nessuna attività";
        }
        
        echo "<h2>Riepilogo Dati</h2>
         <table border='1'>
         <tr>
                <th>Campo</th>
                <th>Valore</th>
              </tr>
         <tr>
                <td>Nome</td>
                <td>{$nome}</td>
              </tr>
         <tr>
                <td>Cognome</td>
                <td>{$cognome}</td>
              </tr>
         <tr>
                <td>Data di Nascita</td>
                <td>{$data_nascita}</td>
              </tr>
         <tr>
                <td>Ora di Arrivo a Casa</td>
                <td>{$ora_arrivo_casa}</td>
              </tr>
         <tr>
                <td>Mezzo di Trasporto</td>
                <td>{$mezzo}</td>
              </tr>
         <tr>
                <td>Corsi Seguiti</td>
                <td>{$attivita_str}</td>
              </tr>
         </table>";
        
    ?>
    
</body>
</html>