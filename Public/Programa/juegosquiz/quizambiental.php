<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz ambiental | Nemi</title>
    <!-- Normalize css -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/">
    <!-- un poco de bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jams icons -->
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <!--iconos socialmedia font awesome  -->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
   <!-- estilo propio -->
   <link rel="stylesheet" href="style/quiz.css">
   
</head>
<body>
    <header class="main-header">
        <div class="content-wrapper">
          
          <label for="logo">&nbsp;Nemi</label>
          <a href="javascript: history.go(-1)"> <span id="open-menu-button" class="jam jam-menu"></span> </a>
          
        </div>
  
       </header>
    <div class="home-box custom-box ">
        <h3>Instrucciones:</h3>
        <p>¿Qué tanto sabes de la madre naturaleza y cuánto sabes cuidarla?</p>
        <p>total de preguntas <span class="total-question">5</span></p>
         <button type="button" class="btn btn-sm button dark" onclick="startQuiz()">Comenzar</button>
    </div>

    <div class="quiz-box custom-box hide">
        <div class="question-number">
        
        </div>
        <div class="question-text">

        </div>
        <div class="option-container">
 
        </div>
        <div class="next-button">
            <button type="button"class="btn btn-sm button dark ghost" onclick="next()">Siguiente</button>
          
        </div>
        <div class="answers-indicator">
           

        </div>
    </div>

    <div class="result-box custom-box hide">
        <h3>Resultados del test</h3>
        <table>
            <tr>
                <td>Total de preguntas</td>
                <td><span class="total-question"></span></td>
               
            </tr>
            <tr>
                <td>Correctas</td>
                <td><span class="total-correct"></span></td>
               
            </tr>
            <tr>
                <td>Inorrectas</td>
                <td><span class="total-wrong"></span></td>
               
            </tr>
            <tr>
                <td>Porcentaje</td>
                <td><span class="total-percentage"></span></td>
               
            </tr>
            <tr>
                <td>Resultado final</td>
                <td><span class="total-score"></span></td>
               
            </tr>
        </table>
        <button type="button" class="btn"onclick="tryAgainQuiz()">Intentar de nuevo</button>
        <button type="button" class="btn"onclick="gotoInstructions()">Regresar a Instrucciones</button>

    </div>
    <script src="test.js"></script>
    <script src="main.js"></script>
 
 
  
</body>
</html>