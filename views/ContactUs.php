<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cakes</title>
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/e15bba1921.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

  <?
      include 'header.php';
    ?>
    <main>
      <div class="all_unit"> 
         <div class="contact_unit">
           <div class="contact">
             <div class="top">
                 <h3><i>Have a question?</i></h3>
             </div>
             <form action="<?= $_SERVER["PHP_SELF"] ?>" id="regForm" method="post">
               <div class="form_unit">
                   <div class="form_control">
                       <label>First Name</label>
                         <input 
                           name="name" 
                           id="name" 
                           type="text" 
                           class="contact_input"  
                           placeholder="Your first name"
                         />
                         <label for="name" id="nameError" class="errorInputReg"></label>
                       <!--<div class="error-hint hidden">Name is required</div>-->
                   </div>
 
                   <div class="form_control">
                       <label>Last name</label>
                       <input 
                           name="lastname"  
                           type="text" 
                           class="contact_input" 
                           id="lastname" 
                           placeholder="Your last name"
                           />
                         <label for="lastname" id="lastnameError" class="errorInputReg"></label>
                      <!-- <div class="error-hint hidden">Last name is required</div>-->
                     </div>
               </div>  
                 
               <div class="form_unit">
                     <div class="form_control">
                       <label>Email</label>
                       <input 
                           name="email" 
                           type="text" 
                           class="contact_input" 
                           id="email" 
                           placeholder="Your email address"
                           />
                        <label for="email" id="emailError" class="errorInputReg"></label>
                      <!-- <div class="error-hint hidden">Email is invalid</div>-->
                     </div>
                     <div class="form_control">
                         <label>Phone</label>
                         <input 
                             name="phone" 
                             type="phone" 
                             class="contact_input" 
                             id="phone" 
                             placeholder="Phone number"
                             />
                          <label for="phone" id="phoneError" class="errorInputReg"></label>
                        <!-- <div class="error-hint hidden">Phone is invalid</div>-->
                     </div>
               </div>  
                 
                     <div class="form_control">
                         <label>Comment</label>
                         <textarea 
                             name="message" 
                             rows="5" cols="10" 
                             class="contact_textarea" 
                             id="message" 
                             placeholder="Message"></textarea>
                          <label for="message" id="messageError" class="errorInputReg"></label>
                        <!-- <div class="error-hint hidden">Message is required</div>-->
                       </div>
                   
                        <button class="btn_contact" id="btn_contact" name="contact_Btn" type="submit">Submit Form</button> 
                       
                    
             </form>
             <?php require_once '../controllers/contactController.php'?>

             <div class="thank-you hidden">
               Thank you for your feedback!
             </div>
 
           </div>
        
           <div class="contact_info">
             <h3><i>Contact</i></h3>
             <div id="address">
             <p >Cake</p>
             <p>Owner/Founder Filan Fisteku</p>
             <br/>
             <p >St."Garibaldi", nr.100</p>
             <p>10000 Prishtine</p>
             <br />
             <p>+383 (49) 100 100 </p>
             <p>cake@prishtina.com</p>
             </div>
           </div>
         </div>
      
 
       
           <div class="contact_bottom">
               <h3 id="open_hours">Oppening Hours</h3>
               <br />
               <div id="info">
               <p>OCTOBER - APRILL</p>
               <p>Monday to Friday form 07:00 am - 06:00 pm</p>
               <p>Saturday  and Sunday 08:00 am- 02:00 pm </p>
               <br />
               <p>APRILL - OCTOBER</p>
               <p>Monday to Friday form 06:00 am - 07:00 pm</p>
               <p>Saturday  and Sunday 07:00 am- 01:00 pm </p>
               <br />
               <p>Reservations are prefered to be booked at least one week before!</p>
               </div>
           </div>
         </div> 
         <?
          include 'footer.php';
        ?>
     </main>
     <script src="js/contactvalidim.js"></script>

   </body>
 </html>