<?php

// —амому сложно, код не мой, но мне нравитс€. –азбираюсь.
// ќб€зательно выполню задание, т.к. его иногда дают на собеседовани€х



/**
 * @param int $dimension
 *
 * @return array
 */
function createArray($dimension)
{
    if ($dimension < 2) {
        throw new InvalidParamException('–азмерность должна быть больше или равна двум');
    }

    $finalArray = [];

    // создаем массив направлений
    $destinations = [
        'right' => 'current',
        'bottom' => null,
        'left' => null,
        'top' => null
    ];

    $destinationVerticalLevel = 0;
    $destinationHorizontalLevel = 0;
    $destinationHasBeenChanged = false;
    $destinationSteps = $dimension;
    $destinationStepsNotChangeCount = 0;

    $currentLevel = 0;

    $maxCycleCount = $dimension * $dimension;
    for ($cycleCount = 1; $cycleCount <= $maxCycleCount; $cycleCount++) {

        // определ€ем направление, с первой итерации пойдет right
        foreach ($destinations as $destinationName => $destination) {
            if ($destination == 'current') {
                $currentDestination = $destinationName;
            }
        }

        if ($currentDestination == 'right') {
            $destinationHorizontalLevel = $destinationHorizontalLevel + 1;
            $currentLevel++;
        } elseif ($currentDestination == 'bottom') {
            $destinationVerticalLevel = $destinationVerticalLevel + 1;
            $currentLevel++;
        } elseif ($currentDestination == 'left') {
            $destinationHorizontalLevel = $destinationHorizontalLevel - 1;
            $currentLevel++;
        } elseif ($currentDestination == 'top') {
            $destinationVerticalLevel = $destinationVerticalLevel - 1;
            $currentLevel++;
        };

        $finalArray[$destinationVerticalLevel][$destinationHorizontalLevel] = $cycleCount;


        /**
         * ≈сли конец - мен€ем направление
         */

        if (($currentLevel == $destinationSteps) || (($currentLevel == $destinationSteps + 1) && !$destinationHasBeenChanged)) {

            $currentLevel = 0;
            $destinationStepsNotChangeCount++;
            if ((!$destinationHasBeenChanged) || ($destinationStepsNotChangeCount == 2)) {
                $destinationSteps = $destinationSteps - 1;
            }

            if (!$destinationHasBeenChanged) {
                $destinationStepsNotChangeCount = 0;
            }
            $destinationHasBeenChanged = true;

            /**
             * ”станавливаем следующее направление
             */
            {
                foreach ($destinations as $destinationName => $destination) {
                    if ($destination == 'current') {
                        $destinations[$destinationName] = null;

                        $nextDestination = each($destinations)['key'];
                        if ($nextDestination) {
                            $destinations[$nextDestination] = 'current';
                        } else {
                            $destinations['right'] = 'current';
                        }

                        break;
                    }
                }
            }
        }
    }

    return $finalArray;
}
$array = createArray(5);
$x = 5;
$y = 5;

for ($i = 0; $i < $y; $i++) {
    for ($j = 0; $j < $x; $j++) {
        echo $array[$i][$j] . ' ';
    }
    echo '<br>';
}

