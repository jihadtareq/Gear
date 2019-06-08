<html>
   
   <head>
      <title>petrolstation Management | Edit</title>
   </head>
   
   <body>
      <form action = "/editpetrolstation/<?php echo $petrolstation[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>location</td>
               <td>
                  <input type = 'text' name = 'location' 
                     value = '<?php echo$petrolstation[0]->location; ?>'/>
               </td>
               <td>nameofpetrolstation</td>
               <td>
                  <input type = 'text' name = 'nameofpetrolstation' 
                     value = '<?php echo$petrolstation[0]->nameofpetrolstation; ?>'/>
               </td>


            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update petrolstation" />
               </td>
            </tr>
         </table>

      </form>
   
   </body>
</html>