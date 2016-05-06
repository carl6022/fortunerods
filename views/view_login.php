<div class="panel panel-default" style="width: 400px; margin: 200px auto;">
   <div class="panel-heading">
      <h3 class="panel-title">LOGIN</h3>
   </div>
   <div class="panel-body">
       <table style="width: 100%;" >
           <tr valign="top">
               <td style="width: 48%;">USERNAME</td>
               <td style="width: 4%;">&nbsp;</td>
               <td style="width: 48%;">PASSWORD</td>
           </tr>
           <tr valign="top">
               <td><input type="text"></td>
               <td>&nbsp;</td>
               <td align="right">
                   <input type="password" id="showpassword">
                   <label ><input type="checkbox" value=""  onclick="showpassword(this.id);" id="show_checkbox"><sm>Show password</sm></label>
               </td>
           </tr>
           <tr valign="top">
               <td><sm>For first time user,</sm></td>
               <td>&nbsp;</td>
               <td></td>
           </tr>
           <tr valign="top">
               <td><button class="btn btn-warning" href="#" style="width: 100%">LOGIN USING SSO</button></td>
               <td>&nbsp;</td>
               <td><button class="btn btn-primary" href="#" style="width: 100%">LOGIN</button></td>
           </tr>
           <tr valign="top">
               <td><a href="#" class="link">&#171; <sm>Back</sm></a></td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
           </tr>
       </table>
   </div>
</div>


<?php echo $js; ?>