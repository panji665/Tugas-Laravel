<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
  <style>
    body{
      text-align: center;
    }
    
    .bg-body{
      background-color : 'red';
    }
    
  
  </style>
<body>
  <h1>Random Color</h1>
  <input type="button" id ='tUbahWarna' value = 'Random'>
  
  <h1>Set RGB</h1>
  <div id= slide>
    <label for="slider1">RED</label>
    <input type="range" id='slider1' value='' min = '0' max='225'>
    <label for="slider2">GREEN</label>
    <input type="range" id='slider2' value='' min = '0' max='225'>
    <label for="slider3">BLUE</label>
    <input type="range" id='slider3' value='' min = '0' max='225'>
    
  </div>
  
  <div id=kolom>
    <table>
      <tr>
        <td><button id=tombol1>yes</button></td>
        <td><button id=tombol2>no </button></td>
      </tr>
    </table>
    
  </div>
  
  <div id="root"></div>

  <script src="admin.js"></script>
</body>
</html>