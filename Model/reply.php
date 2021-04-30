<?PHP
class reply
{
    public $comment;
    public $commentID;
    public $userID;
    public $createdOn;
    function __construct($comment,$commentID,$userID,$createdOn)
    {   $this->comment = $comment; 
        $this->commentID = $commentID;
		$this->userID = $userID;
        $this->createdOn = $createdOn;
    }
    // getter 
    function getcomment()
    {
        return $this->comment;
    }
    function getcommentID()
    {
        return $this->commentID;
    }
    function getuserID()
    {
        return $this->userID;
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
    function setcommentID($commentID)
    {
        return $this->commentID= $commentID;
    }
    function setuserID($userID)
    {
        return $this->userID= $userID;
    }
    function setcreatedOn($createdOn)
    {
        return $this->createdOn= $createdOn;
    }
}
  ?>
