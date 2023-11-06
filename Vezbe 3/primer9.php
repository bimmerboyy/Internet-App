<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer 9</title>
</head>
<body>
    <?php
    class ShoppingBasket{

        var $fItems;
        var $fCurValue;

        function ShoppingBasket($aInitialValue = 0.0){
            $this->fCurValue = $aInitialValue;
        }

        function AddItem($aName,$aValue,$aQuantity = 1){
            $this->fItems[$aName]["Quantity"] += $aQuantity;
            $this->fItems[$aName]["Value"] = $aValue;
            $this->fCurValue += $aValue * $aQuantity;

            return True;
        }

        function RemoveItem($aName,$aQuantity = 1){
            if($this->fItems[$aName]["Quantity"] > $aQuantity){
                $this->fItems[$aName]["Quantity"] -= $aQuantity;
                $this->fCurlValue -= $this->fItems[$aName]["Value"] * $aQuantity;
            }
            else{
                return False;
            }
        }
        function PrintBasket(){
            if(count($this->fItems) > 0){
                print("Content of basket:<blockquote>");
                foreach($this->fItems as $aKey => $aValue)
                {
                    print("{$aValue['Quantity']} $aKey<br>");
                }
                print( "Total value: $" . 
                number_format( $this->fCurValue, 2 ) );
                print( "</blockquote>" );
            print( "<br>" );
            }
            else
            {
            print( "<i>Shopping basket is empty</i><br><br>" );
            }
        }
    }

    $aBasket = new ShoppingBasket( 3.50 );
    $aBasket->PrintBasket();
    $aBasket->AddItem( "gizmo", 1.50 ); // add 1 gizmo
    $aBasket->PrintBasket();
    $aBasket->AddItem( "foobar", 2.10, 6 ); // add 6 foobars
    $aBasket->PrintBasket();
    $aBasket->RemoveItem( "foobar", 15 ); 
    $aBasket->PrintBasket();
    $aBasket->RemoveItem( "foobar", 3 );
    $aBasket->PrintBasket();
    



    ?>
</body>
</html>