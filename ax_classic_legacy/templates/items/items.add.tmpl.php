
<form name="item_edit" method="post" action="index.php?editor=items&id=<?=$id?>&action=9">
       <div class="edit_form">
         <div class="edit_form_header">
           Add Item
         </div>
         <div class="edit_form_content">
         <center>
         <fieldset style="text-align: left;">
           <legend><strong><font size="4">General</font></strong></legend>
           <input type="hidden" name="id" value="<?=$id?>">
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                 <td align="left" width="12%">ID: <br><input type="text" name="id" size="7" value="<?=$newid?>"></td>
                 <td align="left" width="33%">Name: <br><input type="text" name="itemname" size="45" value=""></td>
                  <td align="left" width="33%">
                 Type:  <br>
          <select name="itemtype" style="width: 265px;">
               <?foreach($itemtypes as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $itemtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
                 </td>
                </table>
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                 </tr>
                 <td align="left" width="50%">Lore Name: <br><input type="text" name="lore" size="45" value=""></td>
                 
                   <td align="left" width="50%">
                 Class:  <br>
			      <select name="itemclass">
			      <option value="0"<?echo ($itemclass == 0) ? " selected" : ""?>>Common Item</option>
			      <option value="1"<?echo ($itemclass == 1) ? " selected" : ""?>>Container</option>
                           <option value="2"<?echo ($itemclass == 2) ? " selected" : ""?>>Book</option>
			     </select>
                 </td>
                </tr>
                </table>
                 <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                 <td align="left" width="33%">Stackable:  <br><input type="text" name="stackable" size="10" value="0"></td>
                 <td align="left" width="33%">Stacksize:  <br><input type="text" name="stacksize" size="10" value="1"></td>
                 <td align="left" width="33%">Charges:  <br><input type="text" name="maxcharges" size="10" value="0"></td>
                </tr>
                </table>
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                 <?if($filename != ''):?>
                 <td align="left" width="25%"><a href="index.php?editor=items&id=<?=$id?>&name=<?=$filename?>&action=3">File Name: <br><input type="text" name="filename" size="20" value=""></td>
                 <?endif;?>
                  <?if($filename == ''):?>
                 <td align="left" width="33%">File Name: <br><input type="text" name="filename" size="20" value=""></td>
                 <?endif;?>
                 <td align="left" width="33%"> 
                 Book:  <br>
			      <select name="book">
			      <option value="0"<?echo ($book == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($book == 1) ? " selected" : ""?>>Yes</option>
                           <option value="2"<?echo ($book == 2) ? " selected" : ""?>>Message</option>
			     </select></td>
                <td align="left" width="33%">Booktype: <br><input type="text" name="booktype" size="10" value="0"></td>
                
                </tr>
               </table>
		 <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                <td align="left" width="33%">Charmfile: <br><input type="text" name="charmfile" size="20" value=""></td>
                <td align="left" width="33%">Charmfile ID: <br><input type="text" name="charmfileid" size="10" value="0"></td>
                <td align="left" width="33%">Script File ID: <br><input type="text" name="scriptfileid" size="10" value="0"></td>
                </tr>
                </table>
               
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
              <td align="left" width="33%">Power Source Capacity: <br><input type="text" name="powersourcecapacity" size="10" value="0"></td>
              <td align="left" width="33%">Potion Belt Slots: <br><input type="text" name="potionbeltslots" size="10" value="0"></td>
              <td align="left" width="33%">&nbsp;</td>
              </tr>
                </table>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                 <td align="left" width="25%">
                   Bag Size:  <br>
                 <select class="left" name="bagsize">
              <?foreach($itembagsize as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $bagsize) ? " selected" : ""?>><?=$v?></option>
               <?endforeach;?>       
             </select></td>
                 <td align="left" width="25%">Bag Slots:Not over 10  <br><input type="text" name="bagslots" size="10" value="0"></td>
                 <td align="left" width="25%">Bag Weight Reduction:  <br><input type="text" name="bagwr" size="10" value="0"></td>
                 <td align="left" width="25%">
                 Bag Type:  <br>
                 <select class="left" name="bagtype">
              <?foreach($world_containers as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $bagtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select></td>
                </tr>
                </table>
          </fieldset>

          <fieldset>
           <legend><strong><font size="4">Restrictions</font></strong></legend>
           <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
               <td align="left" width="16%">
                 No Drop:  <br>
                 <select name="nodrop">
			      <option value="1"<?echo ($nodrop == 1) ? " selected" : ""?>>No</option>
			      <option value="0"<?echo ($nodrop == 0) ? " selected" : ""?>>Yes</option>
			     </select>
               </td>
               <td align="left" width="16%">
                 No Rent:  <br>
                 <select name="norent">
                   <option value="1"<?echo ($norent == 1) ? " selected" : ""?>>No</option>
                   <option value="0"<?echo ($norent == 0) ? " selected" : ""?>>Yes</option>
                   <option value="255"<?echo ($norent == 255) ? " selected" : ""?>>255</option>
                 </select>
               </td>
               <td align="left" width="16%">
                 Magic:  <br>
			      <select name="magic">
			      <option value="0"<?echo ($magic == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($magic == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
			   <td align="left" width="16%">
		Tradeskill:  <br>
			      <select name="tradeskills">
			      <option value="0"<?echo ($tradeskills == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($tradeskills == 1) ? " selected" : ""?>>Yes</option>
                 </select>
               <td align="left" width="16%">
                 Artifact:  <br>
			      <select name="artifactflag">
			      <option value="0"<?echo ($artifactflag == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($artifactflag == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
              <td align="left" width="16%">
                 Quest:  <br>
			      <select name="questitemflag">
			      <option value="0"<?echo ($questitemflag == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($questitemflag == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
             </tr>
              <tr>
                   <td align="left" width="16%">
                 Attuneable:  <br>
			      <select name="attuneable">
			      <option value="0"<?echo ($attuneable== 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($attuneable == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                  <td align="left" width="16%">
                 No Pet:  <br>
			      <select name="nopet">
			      <option value="0"<?echo ($nopet == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($nopet == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                     <td align="left" width="16%">
                 FV No Drop:  <br>
			      <select name="fvnodrop">
			      <option value="0"<?echo ($fvnodrop== 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($fvnodrop == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                  <td align="left" width="16%">
                 No Transfer:  <br>
			      <select name="notransfer">
			      <option value="0"<?echo ($notransfer == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($notransfer == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">
                 Potion Belt:  <br>
			      <select name="potionbelt">
			      <option value="0"<?echo ($potionbelt == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($potionbelt == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">
                 Benefit:  <br>
			      <select name="benefitflag">
			      <option value="0"<?echo ($benefitflag == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($benefitflag == 1) ? " selected" : ""?>>Yes</option>
                           <option value="3"<?echo ($benefitflag == 3) ? " selected" : ""?>>3</option>
			     </select>
			   </td>
                </tr>
              <tr>
                 <td align="left" width="16%">
                 Expendable Arrow:  <br>
			      <select name="expendablearrow">
			      <option value="0"<?echo ($expendablearrow == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($expendablearrow == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">
                 Lore:  <br><input type="text" name="loregroup" size="5" value="0">
                      </td>
                <td align="left" width="16%">
                 Req Level:  <br><input type="text" name="reqlevel" size="5" value="0">
                      </td>
                 <td align="left" width="16%">
                 Rec Level:  <br><input type="text" name="reclevel" size="5" value="0">
                      </td>
                 <td align="left" width="16%">
                 Rec Skill:  <br><input type="text" name="recskill" size="5" value="0">
                      </td>
                 <td align="left" width="16%">
                 Evolving Level:  <br><input type="text" name="evolvinglevel" size="5" value="0">
                      </td>
               </tr>
           </table>
<table cellpadding="20px">
<tr>
 </td>
 <td valign="top" align="left">
  Slots:<br>
 <input type="checkbox" name="slot_Charm" value=1 <?echo ($slots & 1) ? "checked" : ""?>> Charm<br>
 <input type="checkbox" name="slot_Ear01" value=2 <?echo ($slots & 2) ? "checked" : ""?>> Ear01<br>
 <input type="checkbox" name="slot_Head" value=4 <?echo ($slots & 4) ? "checked" : ""?>> Head<br>
 <input type="checkbox" name="slot_Face" value=8 <?echo ($slots & 8) ? "checked" : ""?>> Face<br>
 </td>
<td valign="top" align="left">
 <br>
 <input type="checkbox" name="slot_Ear02" value=16 <?echo ($slots & 16) ? "checked" : ""?>> Ear02<br>
 <input type="checkbox" name="slot_Neck" value=32 <?echo ($slots & 32) ? "checked" : ""?>> Neck<br>
 <input type="checkbox" name="slot_Shoulder" value=64 <?echo ($slots & 64) ? "checked" : ""?>> Shoulder<br>
 <input type="checkbox" name="slot_Arms" value=128 <?echo ($slots & 128) ? "checked" : ""?>> Arms<br>
  </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="slot_Back" value=256 <?echo ($slots & 256) ? "checked" : ""?>> Back<br>
 <input type="checkbox" name="slot_Bracer01" value=512 <?echo ($slots & 512) ? "checked" : ""?>> Bracer01<br>
 <input type="checkbox" name="slot_Bracer02" value=1024 <?echo ($slots & 1024) ? "checked" : ""?>> Bracer02<br>
 <input type="checkbox" name="slot_Range" value=2048 <?echo ($slots & 2048) ? "checked" : ""?>> Range<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="slot_Hands" value=4096 <?echo ($slots & 4096) ? "checked" : ""?>> Hands<br>
 <input type="checkbox" name="slot_Primary" value=8192 <?echo ($slots & 8192) ? "checked" : ""?>> Primary<br>
 <input type="checkbox" name="slot_Secondary" value=16384 <?echo ($slots & 16384) ? "checked" : ""?>> Secondary<br>
 <input type="checkbox" name="slot_Ring01" value=32768 <?echo ($slots & 32768) ? "checked" : ""?>> Ring01<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="slot_Ring02" value=65536 <?echo ($slots & 65536) ? "checked" : ""?>> Ring02<br>
 <input type="checkbox" name="slot_Chest" value=131072 <?echo ($slots & 131072) ? "checked" : ""?>> Chest<br>
 <input type="checkbox" name="slot_Legs" value=262144 <?echo ($slots & 262144) ? "checked" : ""?>> Legs<br>
 <input type="checkbox" name="slot_Feet" value=524288 <?echo ($slots & 524288) ? "checked" : ""?>> Feet<br>
                  </td>      
<td valign="top" align="left">
<br>
<input type="checkbox" name="slot_Waist" value=1048576 <?echo ($slots & 1048576) ? "checked" : ""?>> Waist<br>
<input type="checkbox" name="slot_Ammo" value=2097152 <?echo ($slots & 2097152) ? "checked" : ""?>> Ammo<br>
<input type="checkbox" name="slot_Powersource" value=4194304 <?echo ($slots & 4194304) ? "checked" : ""?>> Powersource<br>
<input type="checkbox" name="all_none" value="yes" onClick="Check(document.item_edit)"><b>All/None</b><br>
                 </td>
                </tr>
           </table>

   <table cellpadding="20px">
<tr>
 </td>
 <td valign="top" align="left">
  Races:<br>
 <input type="checkbox" name="race_Human" value=1 <?echo ($races & 1) ? "checked" : ""?>> Human<br>
 <input type="checkbox" name="race_Barbarian" value=2 <?echo ($races & 2) ? "checked" : ""?>> Barbarian<br>
 <input type="checkbox" name="race_Erudite" value=4 <?echo ($races & 4) ? "checked" : ""?>> Erudite<br>
 <input type="checkbox" name="race_Wood_Elf" value=8 <?echo ($races & 8) ? "checked" : ""?>> Wood Elf<br>
 </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="race_High_Elf" value=16 <?echo ($races & 16) ? "checked" : ""?>> High Elf<br>
 <input type="checkbox" name="race_Dark_Elf" value=32 <?echo ($races & 32) ? "checked" : ""?>> Dark Elf<br>
 <input type="checkbox" name="race_Half_Elf" value=64 <?echo ($races & 64) ? "checked" : ""?>> Half Elf<br>
 <input type="checkbox" name="race_Dwarf" value=128 <?echo ($races & 128) ? "checked" : ""?>> Dwarf<br>
  </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="race_Troll" value=256 <?echo ($races & 256) ? "checked" : ""?>> Troll<br>
 <input type="checkbox" name="race_Ogre" value=512 <?echo ($races & 512) ? "checked" : ""?>> Ogre<br>
 <input type="checkbox" name="race_Halfling" value=1024 <?echo ($races & 1024) ? "checked" : ""?>> Halfling<br>
 <input type="checkbox" name="race_Gnome" value=2048 <?echo ($races & 2048) ? "checked" : ""?>> Gnome<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="race_Iksar" value=4096 <?echo ($races & 4096) ? "checked" : ""?>> Iksar<br>
 <input type="checkbox" name="race_Vah_Shir" value=8192 <?echo ($races & 8192) ? "checked" : ""?>> Vah Shir<br>
 <input type="checkbox" name="race_Froglok" value=16384 <?echo ($races & 16384) ? "checked" : ""?>> Froglok<br>
 <input type="checkbox" name="race_Drakkin" value=32768 <?echo ($races & 32768) ? "checked" : ""?>> Drakkin<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="race_Shroud" value=65536 <?echo ($races & 65536) ? "checked" : ""?>> Shroud<br>
<input type="checkbox" name="all_none2" value="yes" onClick="Check2(document.item_edit)"><b>All/None</b><br>
                  </td>
                </tr>
           </table>


            <table cellpadding="20px">
              <tr>
		 </td>
		 <td valign="top" align="left">
     Classes:<br>           
 <input type="checkbox" name="class_Warrior" value=1 <?echo ($classes & 1) ? "checked" : ""?>> Warrior<br>
 <input type="checkbox" name="class_Cleric" value=2 <?echo ($classes & 2) ? "checked" : ""?>> Cleric<br>
 <input type="checkbox" name="class_Paladin" value=4 <?echo ($classes & 4) ? "checked" : ""?>> Paladin<br>
 <input type="checkbox" name="class_Ranger" value=8 <?echo ($classes & 8) ? "checked" : ""?>> Ranger<br>
 </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="class_Shadowknight" value=16 <?echo ($classes & 16) ? "checked" : ""?>> Shadowknight<br>
 <input type="checkbox" name="class_Druid" value=32 <?echo ($classes & 32) ? "checked" : ""?>> Druid<br>
 <input type="checkbox" name="class_Monk" value=64 <?echo ($classes & 64) ? "checked" : ""?>> Monk<br>
 <input type="checkbox" name="class_Bard" value=128 <?echo ($classes & 128) ? "checked" : ""?>> Bard<br>
  </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="class_Rogue" value=256 <?echo ($classes & 256) ? "checked" : ""?>> Rogue<br>
 <input type="checkbox" name="class_Shaman" value=512 <?echo ($classes & 512) ? "checked" : ""?>> Shaman<br>
 <input type="checkbox" name="class_Necromancer" value=1024 <?echo ($classes & 1024) ? "checked" : ""?>> Necromancer<br>
 <input type="checkbox" name="class_Wizard" value=2048 <?echo ($classes & 2048) ? "checked" : ""?>> Wizard<br>
   </td>
<td valign="top" align="left">
<br>
<input type="checkbox" name="class_Magician" value=4096 <?echo ($classes & 4096) ? "checked" : ""?>> Magician<br>
<input type="checkbox" name="class_Enchanter" value=8192 <?echo ($classes & 8192) ? "checked" : ""?>> Enchanter<br>
<input type="checkbox" name="class_Beastlord" value=16384 <?echo ($classes & 16384) ? "checked" : ""?>> Beastlord<br>
<input type="checkbox" name="class_Berserker" value=32768 <?echo ($classes & 32768) ? "checked" : ""?>> Berserker<br>
   </td>
<td valign="top" align="left">
<br>
<input type="checkbox" name="all_none3" value="yes" onClick="Check3(document.item_edit)"><b>All/None</b><br>
   </td>
  </tr>
  </table>

<table cellpadding="20px">
<tr>
 </td>
 <td valign="top" align="left">
  Deity:<br>
 <input type="checkbox" name="deity_Agnostic" value=1 <?echo ($deity & 1) ? "checked" : ""?>> Agnostic<br>
 <input type="checkbox" name="deity_Bertox" value=2 <?echo ($deity & 2) ? "checked" : ""?>> Bertoxxulous<br>
 <input type="checkbox" name="deity_Brell" value=4 <?echo ($deity & 4) ? "checked" : ""?>> Brell Serilis<br>
 <input type="checkbox" name="deity_Cazic" value=8 <?echo ($deity & 8) ? "checked" : ""?>> Cazic-Thule<br>
 </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="deity_Erollsi" value=16 <?echo ($deity & 16) ? "checked" : ""?>> Erollsi Marr<br>
 <input type="checkbox" name="deity_Bristlebane" value=32 <?echo ($deity & 32) ? "checked" : ""?>> Bristlebane<br>
 <input type="checkbox" name="deity_Innoruuk" value=64 <?echo ($deity & 64) ? "checked" : ""?>> Innoruuk<br>
 <input type="checkbox" name="deity_Karana" value=128 <?echo ($deity & 128) ? "checked" : ""?>> Karana<br>
  </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="deity_Mithaniel_Marr" value=256 <?echo ($deity & 256) ? "checked" : ""?>> Mithaniel Marr<br>
 <input type="checkbox" name="deity_Prexus" value=512 <?echo ($deity & 512) ? "checked" : ""?>> Prexus<br>
 <input type="checkbox" name="deity_Quellious" value=1024 <?echo ($deity & 1024) ? "checked" : ""?>> Quellious<br>
 <input type="checkbox" name="deity_Rallos_Zek" value=2048 <?echo ($deity & 2048) ? "checked" : ""?>> Rallos Zek<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="deity_Rodcet_Nife" value=4096 <?echo ($deity & 4096) ? "checked" : ""?>> Rodcet Nife<br>
 <input type="checkbox" name="deity_Solusek_Ro" value=8192 <?echo ($deity & 8192) ? "checked" : ""?>> Solusek Ro<br>
 <input type="checkbox" name="deity_The_Tribunal" value=16384 <?echo ($deity & 16384) ? "checked" : ""?>> The Tribunal<br>
 <input type="checkbox" name="deity_Tunare" value=32768 <?echo ($deity & 32768) ? "checked" : ""?>> Tunare<br>
   </td>
<td valign="top" align="left">
<br>
 <input type="checkbox" name="deity_Veeshan" value=65536 <?echo ($deity & 65536) ? "checked" : ""?>> Veeshan<br>
<input type="checkbox" name="all_none4" value="yes" onClick="Check4(document.item_edit)"><b>All/None</b><br>
                  </td>
                </tr>
           </table>

         </center>
        </fieldset>

        <fieldset>
          
           <legend><strong><font size="4">Stats</font></strong></legend><br>
           <fieldset>
           <legend><font size="4">Damage</font></legend>
           <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
               <td align="left" width="33%">Damage:  <br><input type="text" name="damage" size="5" value="0"></td>
               <td align="left" width="33%">Delay:  <br><input type="text" name="delay" size="5" value="0"></td>
               <td align="left" width="33%">Range:  <br><input type="text" name="range" size="5" value="0"></td>
               </tr>
               </table>
               <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
               <td align="left" width="14%">Bane Dmg:  <br><input type="text" name="banedmgamt" size="5" value="0"></td>
               <td align="left" width="14%">Bane Race Dmg:  <br><input type="text" name="banedmgraceamt" size="5" value="0"></td>
                      <td align="left" width="14%">
          Bane Race:  <br>
	            <select class="left" name="banedmgrace">
	                <?foreach($itemraces as $k => $v):?>
	                <option value="<?=$k?>"<? echo ($k == $banedmgrace) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
	                 <?endforeach;?>       
	               </select>
	                 </td>
	                      <td align="left" width="14%">
	            Bane Bodytype:  <br>
	            <select class="left" name="banedmgbody">
	                <?foreach($bodytypes as $k => $v):?>
	                <option value="<?=$k?>"<? echo ($k == $banedmgbody) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
	                 <?endforeach;?>       
	               </select>
	                 </td>
	               </tr>
	                </table><br>
	                 <fieldset>
               <table width="100%" border="0" cellpadding="3" cellspacing="0">
               
               <tr>
              <td align="left" width="35%">Extra Dmg Skill:<br>
                 <select class="left" name="extradmgskill">
                   <?foreach($skilltypes as $k => $v):?>
                   <option value="<?=$k?>"<? echo ($k == $extradmgskill) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
                   <?endforeach;?>       
                 </select><br>
                 Extra Dmg Amt:<br>
                 <input type="text" name="extradmgamt" size="5" value="0">
               </td>
               <td align="left" width="25%">Elem Dmg Type:<br>
                 <input type="text" name="elemdmgtype" size="5" value="0"><br>
                 Elem Dmg Amt:  <br><input type="text" name="elemdmgamt" size="5" value="0">
               </td>
               <td align="left" width="25%">Spell Dmg:  <br><input type="text" name="spelldmg" size="5" value="0"></td>
               <td align="left" width="25%">Backstab Dmg:  <br><input type="text" name="backstabdmg" size="5" value="0"></td>
               </tr>
              </table>
              </fieldset>
              </fieldset><br><br>
             <fieldset>
              <legend><font size="4">Base Stats</font></legend>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
               <td align="left" width="14%">HP:  <br><input type="text" name="hp" size="5" value="0"></td>
               <td align="left" width="14%">Mana:  <br><input type="text" name="mana" size="5" value="0"></td>
               <td align="left" width="15%">Endurance:  <br><input type="text" name="endur" size="5" value="0"></td>
               <td align="left" width="14%">AC:  <br><input type="text" name="ac" size="5" value="0"></td>
               <td align="left" width="14%">Accuracy:  <br><input type="text" name="accuracy" size="5" value="0"></td>
               <td align="left" width="14%">Attack:  <br><input type="text" name="attack" size="5" value="0"></td>
             </tr>
                <tr>
               <td align="left" width="14%">HP Regen:  <br><input type="text" name="regen" size="5" value="0"></td>
               <td align="left" width="14%">Mana Regen:  <br><input type="text" name="manaregen" size="5" value="0"></td>
               <td align="left" width="15%">End Regen:  <br><input type="text" name="enduranceregen" size="5" value="0"></td>
               <td align="left" width="14%">Haste:  <br><input type="text" name="haste" size="5" value="0"></td>
               <td align="left" width="14%">Light:  <br><input type="text" name="light" size="5" value="0"></td>
             </tr>
           </table>
           </fieldset><br><br>
            <fieldset>
              <legend><font size="4">Stats</font></legend>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
               <td align="left" width="14%">AGI:  <br><input type="text" name="aagi" size="5" value="0"></td>
               <td align="left" width="14%">CHA:  <br><input type="text" name="acha" size="5" value="0"></td>
               <td align="left" width="14%">DEX:  <br><input type="text" name="adex" size="5" value="0"></td>
               <td align="left" width="14%">INT:  <br><input type="text" name="aint" size="5" value="0"></td>
               <td align="left" width="14%">STA:  <br><input type="text" name="asta" size="5" value="0"></td>
               <td align="left" width="15%">STR:  <br><input type="text" name="astr" size="5" value="0"></td>
               <td align="left" width="15%">WIS:  <br><input type="text" name="awis" size="5" value="0"></td>
             </tr>
             <tr>
               <td align="left" width="14%">Cold:  <br><input type="text" name="cr" size="5" value="0"></td>
               <td align="left" width="14%">Disease:  <br><input type="text" name="dr" size="5" value="0"></td>
               <td align="left" width="14%">Fire:  <br><input type="text" name="fr" size="5" value="0"></td>
               <td align="left" width="14%">Magic:  <br><input type="text" name="mr" size="5" value="0"></td>
               <td align="left" width="14%">Poison:  <br><input type="text" name="pr" size="5" value="0"></td>
               <td align="left" width="15%">Corruption:  <br><input type="text" name="svcorruption" size="5" value="0"></td>
               <td align="left" width="15%">Stun:  <br><input type="text" name="stunresist" size="5" value="0"></td>
             </tr>
             </table>
           </fieldset><br><br>
             <fieldset>
              <legend><font size="4">Spell/Ability Stats</font></legend>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
               <td align="left" width="14%">DMG Shield:  <br><input type="text" name="damageshield" size="5" value="0"></td>
               <td align="left" width="14%">DOT Shielding:  <br><input type="text" name="dotshielding" size="5" value="0"></td>
               <td align="left" width="14%">Shielding:  <br><input type="text" name="shielding" size="5" value="0"></td>
               <td align="left" width="14%">Spell Shield:  <br><input type="text" name="spellshield" size="5" value="0"></td>
               <td align="left" width="14%">Strikethrough:  <br><input type="text" name="strikethrough" size="5" value="0"></td>
               <td align="left" width="14%">Combat Effects:  <br><input type="text" name="combateffects" size="5" value="0"></td>
             </tr>
             <tr>
               <td align="left" width="14%">Avoidance:  <br><input type="text" name="avoidance" size="5" value="0"></td>
               <td align="left" width="14%">Dmg Shield Mit:  <br><input type="text" name="dsmitigation" size="5" value="0"></td>
               <td align="left" width="15%">Heal Amt:  <br><input type="text" name="healamt" size="5" value="0"></td>
               <td align="left" width="15%">Clairvoyance:  <br><input type="text" name="clairvoyance" size="5" value="0"></td>
               <td align="left" width="14%">Purity:  <br><input type="text" name="purity" size="5" value="0"></td>
             </tr>
               </table>
                            </fieldset><br><br>
	                    <fieldset>
	                    <legend><font size="4">Skill Stats</font></legend>
	       <table width="100%" border="0" cellpadding="3" cellspacing="0">
	                   <tr>
	                        <td align="left" width="50%">
	                Skill Mod:  <br>
	                <select class="left" name="skillmodtype">
	                    <?foreach($skilltypes as $k => $v):?>
	                    <option value="<?=$k?>"<? echo ($k == $skillmodtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
	                     <?endforeach;?>       
	                   </select>
	                     </td>
	                  <td align="left" width="50%">Skill Mod Value:  <br><input type="text" name="skillmodvalue" size="5" value="0"></td> 
	                 </table>
	                  </tr>
	                </fieldset><br>
         </fieldset><br>

        <fieldset>
          <legend><strong><font size="4">Costs</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="25%">Price:<br/><input type="text" name="price" size="9" value="<?=$price?>"></td>
              <td align="left" width="25%">Sellrate:<br/><input type="text" name="sellrate" size="9" value="<?=$sellrate?>"></td>
              <td align="left" width="25%">Favor:<br/><input type="text" name="favor" size="9" value="<?=$favor?>"></td>
              <td align="left" width="25%">Guild Favor:<br/><input type="text" name="guildfavor" size="9" value="<?=$guildfavor?>"></td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset><br>

         
         <fieldset>
           <legend><strong><font size="4">Apperance</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <tr>
                <td align="left" width="25%">Icon: <br><input type="text" name="icon" size="9" value="0"></td>
                <td align="left" width="25%">IDFile:  <br><input type="text" name="idfile" size="9" value="IT"></td>
                <td align="left" width="25%">Weight:  <br><input type="text" name="weight" size="9" value="1"></td>
                <td align="left" width="25%">Color:  <br><input type="text" name="color" size="9" value="4278190080"></td>
              </tr>
            </table>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
   <td align="left" width="33%">
          Size:  <br>
          <select class="left" name="size">
              <?foreach($itemsize as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $size) ? " selected" : ""?>><?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
            <td align="left" width="33%">
          Material:  <br>
          <select class="left" name="material">
               <?foreach($itemmaterial as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $material) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
              <td align="left" width="33%">Elite Material:  <br><input type="text" name="elitematerial" size="9" value="0"></td>
             </tr>
            </table>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Spells</font></strong></legend>
            (<a href="javascript:showSearch();">Spell Search</a>)<br><br>
              <center>
        <iframe id='searchframe' src='templates/iframes/spellsearch.php'></iframe>
        <input id="button" type="button" value='Hide Spell Search' onclick='hideSearch();' style='display:none; margin-bottom: 20px;'>
      </center>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <center>
              <tr>
               <td align="left" width="25%">Casttime:  <br><input type="text" name="casttime" size="9" value="0"></td>
               <td align="left" width="25%">Casttime_:  <br><input type="text" name="casttime_" size="9" value="0"></td>
               <td align="left" width="25%">Recast Delay:  <br><input type="text" name="recastdelay" size="9" value="0"></td>
               <td align="left" width="25%">Recast Type:  <br><input type="text" name="recasttype" size="9" value="0"></td>
             </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
                <td align="left" width="14%">
          Click Type:  <br>
          <select class="left" name="clicktype">
               <?foreach($itemcasttype as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $clicktype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
               <td align="left" width="14%">Click Effect: <br><input type="text" name="clickeffect" size="5" value="-1"></td>
               <td align="left" width="14%">Click Level:  <br><input type="text" name="clicklevel" size="5" value="0"></td>
               <td align="left" width="14%">Click Level 2:  <br><input type="text" name="clicklevel2" size="5" value="0"></td>
               <td align="left" width="20%">Click Name:  <br><input type="text" name="clickname" size="17" value=""></td>
              </tr>
              </table>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
            <td align="left" width="14%">
          Proc Type:  <br>
          <select class="left" name="proctype">
               <?foreach($proccasttype as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $proctype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
               <td align="left" width="14%">Proc Effect:   <br><input type="text" name="proceffect" size="5" value="-1"></td>
               <td align="left" width="14%">Proc Level:  <br><input type="text" name="proclevel" size="5" value="0"></td>
               <td align="left" width="14%">Proc Level 2:  <br><input type="text" name="proclevel2" size="5" value="0"></td>
               <td align="left" width="20%">Proc Name:  <br><input type="text" name="procname" size="17" value=""></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
            <td align="left" width="14%">
          Worn Type:  <br>
          <select class="left" name="worntype">
               <?foreach($worncasttype as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $worntype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
               <td align="left" width="14%">Worn Effect:   <br><input type="text" name="worneffect" size="5" value="-1"></td>
               <td align="left" width="14%">Worn Level:  <br><input type="text" name="wornlevel" size="5" value="0"></td>
               <td align="left" width="14%">Worn Level 2:  <br><input type="text" name="wornlevel2" size="5" value="0"></td>
               <td align="left" width="20%">Worn Name:  <br><input type="text" name="wornname" size="17" value=""></td>
              </tr>
            </table>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
            <td align="left" width="14%">
          Focus Type:  <br>
          <select class="left" name="focustype">
               <?foreach($focuscasttype as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $focustype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
               <td align="left" width="14%">Focus Effect:  <br><input type="text" name="focuseffect" size="5" value="-1"></td>
               <td align="left" width="14%">Focus Level:  <br><input type="text" name="focuslevel" size="5" value="0"></td>
               <td align="left" width="14%">Focus Level 2:  <br><input type="text" name="focuslevel2" size="5" value="0"></td>
               <td align="left" width="20%">Focus Name:  <br><input type="text" name="focusname" size="17" value=""></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
            <td align="left" width="14%">
          Scroll Type:  <br>
          <select class="left" name="scrolltype">
               <?foreach($scrollcasttype as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $scrolltype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
               <td align="left" width="14%">Scroll Effect: <br><input type="text" name="scrolleffect" size="5" value="-1"></td>
               <td align="left" width="14%">Scroll Level:  <br><input type="text" name="scrolllevel" size="5" value="0"></td>
               <td align="left" width="14%">Scroll Level 2:  <br><input type="text" name="scrolllevel2" size="5" value="0"></td>
               <td align="left" width="20%">Scroll Name:  <br><input type="text" name="scrollname" size="17" value=""></td>
              </tr>
            </table>
 
            </center>
         </fieldset><br>

         <fieldset>
           <legend><strong><font size="4">Augment</font></strong></legend>
            <center>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
                 <td align="left" width="16%">Slot 1 Type: <br><input type="text" name="augslot1type" size="5" value="0"></td>
                 <td align="left" width="16%">
                 Slot 1 Visible:  <br>
			      <select name="augslot1visible">
			      <option value="0"<?echo ($augslot1visible == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($augslot1visible == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">Slot 2 Type: <br><input type="text" name="augslot2type" size="5" value="0"></td>
                 <td align="left" width="16%">
                 Slot 2 Visible:  <br>
			      <select name="augslot2visible">
			      <option value="0"<?echo ($augslot2visible == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($augslot2visible == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">Slot 3 Type: <br><input type="text" name="augslot3type" size="5" value="0"></td>
                 <td align="left" width="16%">
                 Slot 3 Visible:  <br>
			      <select name="augslot3visible">
			      <option value="0"<?echo ($augslot3visible == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($augslot3visible == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                  </table>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
               <td align="left" width="16%">Slot 4 Type: <br><input type="text" name="augslot4type" size="5" value="0"></td>
                 <td align="left" width="16%">
                 Slot 4 Visible:  <br>
			      <select name="augslot4visible">
			      <option value="0"<?echo ($augslot4visible == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($augslot4visible == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 <td align="left" width="16%">Slot 5 Type: <br><input type="text" name="augslot5type" size="5" value="0"></td>
                 <td align="left" width="16%">
                 Slot 5 Visible:  <br>
			      <select name="augslot5visible">
			      <option value="0"<?echo ($augslot5visible == 0) ? " selected" : ""?>>No</option>
			      <option value="1"<?echo ($augslot5visible == 1) ? " selected" : ""?>>Yes</option>
			     </select>
			   </td>
                 </tr>
            </table><br>
            <fieldset>
                        <table width="100%" border="0" cellpadding="3" cellspacing="0">
             <tr>
   <td align="left" width="50%">
          Augment Restrictions:  <br>
          <select class="left" name="augrestrict">
              <?foreach($itemsaugrestrict as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $augrestrict) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
               <?endforeach;?>       
             </select>
               </td>
              <td align="left" width="50%">Augment Distiller: <br><input type="text" name="augdistiller" size="5" value="0"></td>
             </table>
                        <table cellpadding="20px">
              <tr>
		 </td>
		 <td valign="top" align="left">
                Type:<br>
	<input type="checkbox" name="augtype_Type_1" value=1 <?echo ($augtype & 1) ? "checked" : ""?>> Type 1<br>
		                  <input type="checkbox" name="augtype_Type_2" value=2 <?echo ($augtype & 2) ? "checked" : ""?>> Type 2<br>
		                  <input type="checkbox" name="augtype_Type_3" value=4 <?echo ($augtype & 4) ? "checked" : ""?>> Type 3<br>
		                  <input type="checkbox" name="augtype_Type_4" value=8 <?echo ($augtype & 8) ? "checked" : ""?>> Type 4<br>
		                  </td>
		                 <td valign="top" align="left">
                                 <br>
		                  <input type="checkbox" name="augtype_Type_5" value=16 <?echo ($augtype & 16) ? "checked" : ""?>> Type 5<br>
		                  <input type="checkbox" name="augtype_Type_6" value=32 <?echo ($augtype & 32) ? "checked" : ""?>> Type 6<br>
		                  <input type="checkbox" name="augtype_Type_7" value=64 <?echo ($augtype & 64) ? "checked" : ""?>> Type 7<br>
		                  <input type="checkbox" name="augtype_Type_8" value=128 <?echo ($augtype & 128) ? "checked" : ""?>> Type 8<br>
		                   </td>
		                 <td valign="top" align="left">
                                <br>
		                  <input type="checkbox" name="augtype_Type_9" value=256 <?echo ($augtype & 256) ? "checked" : ""?>> Type 9<br>
		                  <input type="checkbox" name="augtype_Type_10" value=512 <?echo ($augtype & 512) ? "checked" : ""?>> Type 10<br>
		                  <input type="checkbox" name="augtype_Type_11" value=1024 <?echo ($augtype & 1024) ? "checked" : ""?>> Type 11<br>
		                  <input type="checkbox" name="augtype_Type_12" value=2048 <?echo ($augtype & 2048) ? "checked" : ""?>> Type 12<br>
                              <td valign="top" align="left">
                                <br>
                                <input type="checkbox" name="all_none5" value="yes" onClick="Check5(document.item_edit)"><b>All/None</b><br>
		   </td>
                </tr>
           </table>
           </fieldset>
          </center>
          </fieldset><br>

          <fieldset>
           <legend><strong><font size="4">Faction</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <center>
              <tr>
               <td align="left" width="25%">Faction Mod 1:  <br><input type="text" name="factionmod1" size="5" value="0"></td>
               <td align="left" width="25%">Faction Amt 1:  <br><input type="text" name="factionamt1" size="5" value="0"></td>
               <td align="left" width="25%">Faction Mod 2:  <br><input type="text" name="factionmod2" size="5" value="0"></td>
               <td align="left" width="25%">Faction Amt 2:  <br><input type="text" name="factionamt2" size="5" value="0"></td>
            </table>
               </tr>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
               <td align="left" width="25%">Faction Mod 3:  <br><input type="text" name="factionmod3" size="5" value="0"></td>
               <td align="left" width="25%">Faction Amt 3:  <br><input type="text" name="factionamt3" size="5" value="0"></td>
               <td align="left" width="25%">Faction Mod 4:  <br><input type="text" name="factionmod4" size="5" value="0"></td>
               <td align="left" width="25%">Faction Amt 4:  <br><input type="text" name="factionamt4" size="5" value="0"></td>
            </table>
               </tr>
            </center>
         </fieldset><br>

            <fieldset>
           <legend><strong><font size="4">Verification</font></strong></legend>
             <table width="100%" border="0" cellpadding="3" cellspacing="0">
               <center>
             <tr>
             <td align="left" width="25%">Created:  <br><input type="text" name="created" size="20" value="<?=$year?><?=$mon?><?=$mday?><?=$hours?><?=$minutes?><?=$seconds?>"></td>
             <td align="left" width="25%">Verified:  <br><input type="text" name="verified" size="20" value="<?=$year?>-<?=$mon?>-<?=$mday?> <?=$hours?>:<?=$minutes?>:<?=$seconds?>"></td>
             <td align="left" width="25%">Updated:  <br><input type="text" name="updated" size="20" value="<?=$year?>-<?=$mon?>-<?=$mday?> <?=$hours?>:<?=$minutes?>:<?=$seconds?>"></td>
             <td align="left" width="25%">Source:  <br><input type="text" name="source" size="20" value="CUSTOM"></td>
             </tr>
             <tr>
             <td align="left" width="25%">Comment:  <br><input type="text" name="comment" size="20" value=""></td>
             </tr>
            </table>
            </center>
          </fieldset><br>
         <center>
            <input type="submit" value="Submit Changes">
         </center>
         </div>
       </div>