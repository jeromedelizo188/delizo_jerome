<?php 

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentsModel extends Model {

   protected $table = 'students';
   protected $primary_key = 'student_id';

   public function __construct()
   {
       parent::__construct();
   }
}

?>