<?php
//function containsDuplicate($nums): bool
//{
//        for ($i = 0; $i <= count($nums); $i++){
//            for($j = $i + 1; $j <= count($nums) - 1; $j++){
//                if($nums[$i] === $nums[$j]){
//                    return true;
//                }
//            }
//        }
//        return false;
//}
//$nums = [1,2,3,4];
//echo containsDuplicate($nums);
echo "name";
function containsDuplicate($nums)
{
    $unique = array_unique($nums);
    if (count($unique) == count($nums)) {
        return true;
    }
    return "0";

}
$nums = [1,2,3,4,1];
echo containsDuplicate($nums);