<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/CaontactUs.css">
   

    <title>BM SQUARE | Caontact Us</title>
    <link rel="icon" type="x-icon"  href="/images/Logo.jpeg">
</head>
<body>
 
  <?php require "includes/header.php";?>
  


  <section class="contact"  id="contact" style="margin-bottom: 500px;">
        <h3 class="title">contact Us</h3>
        <p class="sub-title">Get in Touch</p>

        <div class="container">
          <div class="text">
            <h2>Get in Touch</h2>
            <p>
              It is a long established fact that a reader will be distracted by readable
                 It is a long established fact that a reader will be distracted by readable
                 It is a long established fact that a reader will be distracted by readable
                 It is a long established fact that a reader will be distracted by readable
                 It is a long established fact that a reader will be distracted by readable
            </p>
            <div class="item">
              <div class="icon">
                
              </div>
              <div class="description">
                <p><strong>Name</strong></p>
                <small>BM SQUARE</small>
              </div>
            </div>
            
            <p style="clear:both"></p>

            <div class="item">
              <div class="icon">
                
              </div>
              <div class="description">
                <p><strong>Adress</strong></p>
                <small>Syntax</small>
              </div>
            </div>

            <p style="clear:both"></p>

            <div class="item">
              <div class="icon">
                
              </div>
              <div class="description">
                <p><strong>Phone</strong></p>
                <small>+20 012222222222</small>
              </div>
            </div>

            <p style="clear:both"></p>

          </div>  
          
        </div>

        <div class="form-parent">
              <input 
              type="text" 
              name="" 
              placeholder="Your Name Please" 
              class="w-100"/>
              <input 
              type="tel"  
              name="phone" 
              placeholder="Your Number Please" 
              pattern="[02]{01}-[0]{1}-[0-9]{3}"
               class="w-100"/>
              <input 
              type="text" 
              name=""
              placeholder="Adress(Optional)" 
              class="w-100">
            
              <label for="cars">Choose Type of the servies:</label>
              <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Another</option>
              </select>
                <br><br>
                
        
              <textarea placeholder="Please, any servies not found in Choose put It's name or  It's description here..." class="w-100"></textarea>
              <button type="submit">Submit</button>
          </div>
  </section>


  <?php require "includes/footer.php"; ?>


</body>
</html>