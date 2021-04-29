<?PHP
class user
{
    public $name;
    public $email;
    public $ePassword;
    public $createdOn;
    function __construct($name,$email,$ePassword,$createdOn)
    {   $this->name = $name; 
        $this->email = $email;
		$this->userID = $ePassword;
        $this->createdOn = $createdOn;
    }
    // getter 
    function getname()
    {
        return $this->name;
    }
    function getemail()
    {
        return $this->email;
    }
    function getpassword()
    {
        return $this->ePassword;
    }
    function getcreatedOn()
    {
        return $this->createdOn;
    }
    // setter 
     function setname($name)
    {
        return $this->name= $name;
    }
    function setemail($email)
    {
        return $this->email= $email;
    }
    function setpassword($ePassword)
    {
        return $this->ePassword= $ePassword;
    }
    function setcreatedOn($createdOn)
    {
        return $this->createdOn= $createdOn;
    }
}
  ?>
