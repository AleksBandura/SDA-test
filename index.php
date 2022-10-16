<?php
namespace index;


class index
{
    private $number,
            $bigNumbers,
            $smallNumbers,
            $result = 0;

    public function __construct()
    {
        if(isset($_POST['number']))
        {
            $this->number = $_POST['number'];
            ($this->number >= 1000 ? $this->addingNumber($this->number) : $this->removingNumber($this->number));
        }
    }

    public function addingNumber($number)
    {
       return  $this->bigNumbers += $number;
    }

    public function removingNumber($number)
    {
        return $this->smallNumbers -= $number;
        return $this->smallNumbers -= $number;
    }

    public function getNumbers()
    {
        echo "<span style='color: green'>" . 'bigNumber = '  . $this->bigNumbers   . '</span> <br/>'
            ."<span style='color: red'>"   . 'smalNumber = ' . $this->smallNumbers . '</span>';
    }

}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>
<body>
    <form method="post" action="<?php $result?>">
        <input type="number" name="number" placeholder="Введите число">
        <input type="submit" name="submit" />
    </form>

    <div style="margin-top: 15px;">
        <?php
            $result = new Index();
            $result->getNumbers();
        ?>
    </div>
</body>
</html>
