<html>
   
   <head>
      <title>Mechanic Management | Edit</title>
   </head>
   
   <body>
      <form action = "/edit/<?php echo $mechanic[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>name_shop</td>
               <td>
                  <input type = 'text' name = 'name_shop' 
                     value = '<?php echo$mechanic[0]->name_shop; ?>'/>
               </td>
               <td>mobile</td>
               <td>
                  <input type = 'text' name = 'mobile' 
                     value = '<?php echo$mechanic[0]->mobile; ?>'/>
               </td>
               <td>area</td>
               <td>
                  <input type = 'text' name = 'area' 
                     value = '<?php echo$mechanic[0]->area; ?>'/>
               </td>
               <td>address</td>
               <td>
                  <input type = 'text' name = 'address' 
                     value = '<?php echo$mechanic[0]->address; ?>'/>
               </td>
               <td>worktime</td>
               <td>
                  <input type = 'text' name = 'worktime' 
                     value = '<?php echo$mechanic[0]->worktime; ?>'/>
               </td>
               <td>Wash</td>
               <td>
                  <input type = 'text' name = 'Wash' 
                     value = '<?php echo$mechanic[0]->Wash; ?>'/>
               </td>
               <td>kindofcartofix</td>
               <td>
                  <input type = 'text' name = 'kindofcartofix' 
                     value = '<?php echo$mechanic[0]->kindofcartofix; ?>'/>
               </td>
               <td>description</td>
               <td>
                  <input type = 'text' name = 'description' 
                     value = '<?php echo$mechanic[0]->description; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update mechanic" />
               </td>
            </tr>
         </table>

      </form>
   
   </body>
</html>