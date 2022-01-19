    
    <?php


$subject = "Corporativo Planning Consultas";

$emailsSend = ["beto1perk@gmail.com","valenzuelaestradam@gmail.com"];

$to = "$emailsSend[0],$emailsSend[1]";

$message = "
<html>
<head>
    <title>Email-corporativoplanning.com Consultas</title>
</head>
<body>
<p>Este <strong>mensaje de consulta</strong> fue enviado desde  https://corporativoplanning.com/</p>
<table style='margin:0!important'>
    <tr>
    <td style='margin:0!important;border:1px solid #444;background:#007bff;color:#000;padding:8px;'><b>Nombres y Apellidos:</b></td>
    <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userName']."</td>
    </tr>
    <tr>
    <td style='margin:0!important;border:1px solid #444;background:#007bff;color:#000;padding:8px;'><b>Telefono:</b></td>
    <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userPhone']."</td>
    </tr>
    <tr>
    <td style='margin:0!important;border:1px solid #444;background:#007bff;color:#000;padding:8px;'><b>Area:</b></td>
    <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userIssue']."</td>
    </tr>
    <tr>
    <td style='margin:0!important;border:1px solid #444;background:#007bff;color:#000;padding:8px;'><b>Mensaje:</b></td>
    <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$_POST['userMessage']."</td>
    </tr>

</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if(mail($to,$subject,$message,$headers)){
    
    header("location:index.php");

}else{
            
echo `<script>
    alert('no se envio el correo');
        </script>`; 
}



?>