<?php /* app/Model/CommentModel.php */
namespace Model;
namespace W\Model;

class UsersModel extends \W\Model\UsersModel {

  public $nom;
  public $prenom;
  public $email;
  public $pseudo;
  public $password;
  public $admin = 0;


  public function __construct($nom, $prenom, $email, $pseudo, $password, $admin) {
    $this -> nom = $nom;
    $this -> prenom = $prenom;
    $this -> email = $email;
    $this -> pseudo = $pseudo;
    $this -> password = $password;
    $this -> admin = $admin;
  }


  }
