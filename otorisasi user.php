<?php
  $role = $member['role'];
  if($role != 'staff'){
  ?> 
  <button type="submit" class="btn btn-danger"
   name="proses" value="hapus" 
   onclick="return confirm('Anda Yakin Data diHapus?')"/>
   Hapus</button>
  <?php } ?> 
