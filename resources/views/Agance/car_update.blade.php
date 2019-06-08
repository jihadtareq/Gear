<html>
   
   <head>
      <title> CAR Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit1/<?php echo $car[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Model</td>
               <td>
                  <input type = 'text' name = 'kindofcarhave' 
                     value = '<?php echo$car[0]->kindofcarhave; ?>'/>
               </td>
               <td>Price</td>
               <td>
                  <input type = 'text' name = 'price' 
                     value = '<?php echo$car[0]->price; ?>'/>
               </td>
               <td>Description</td>
               <td>
                  <input type = 'text' name = 'description' 
                     value = '<?php echo$car[0]->description; ?>'/>
               </td>

              <td>Agane_Name</td>
               <td>
                  <input type = 'text' name = 'agancename' 
                     value = '<?php echo$car[0]->agancename; ?>'/>
               </td>



            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update car" />
               </td>
            </tr>
         </table>

      </form>
   
   </body>
</html>