<?PHP
class comment
{
    public $comment;
    public $createdOn;
    function __construct($comment,$createdOn)
    {   $this->comment = $comment; 
        $this->createdOn = $createdOn;

    }
    // getter 
    function getcomment()
    {
        return $this->comment;
    }

    function getcreatedOn()
    {
        return $this->createdOn;
    }
    // setter 
     function setcomment($comment)
    {
        return $this->comment= $comment;
    }
    function setcreatedOn($createdOn)
    {
        return $this->createdOn= $createdOn;
    }
}
  ?>
