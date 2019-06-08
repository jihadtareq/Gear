<html>
   
   <head>
      <title> Spare_Part Management | Edit</title>
   </head>
   
   <body>
      <form action = "/editsparepart/<?php echo $sparepart[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>name</td>
               <td>
                  <input type = 'text' name = 'sparepart' 
                     value = '<?php echo$sparepart[0]->sparepart; ?>'/>
               </td>
               <td>Price</td>
               <td>
                  <input type = 'text' name = 'price' 
                     value = '<?php echo$sparepart[0]->price; ?>'/>
               </td>
               <td>Description</td>
               <td>
                  <input type = 'text' name = 'description' 
                     value = '<?php echo$sparepart[0]->description; ?>'/>
               </td>

              <td>store_Name</td>
               <td>
                  <input type = 'text' name = 'storename' 
                     value = '<?php echo$sparepart[0]->storename; ?>'/>
               </td>



            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update sparepart" />
               </td>
            </tr>
         </table>

      </form>
   
   </body>
</html>