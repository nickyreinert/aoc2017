<?php

	namespace aoc\day3;

	if (isset($_POST['input'])) {

		$result = NULL;

		switch ($_POST['part'])
		{
			case 1: $result = resolvePart1($_POST['input']); break;

			case 2: $result = resolvePart2($_POST['input']); break;

		}

		echo $result;

		exit();

	} else {

		$inputPart1 = '20';

		$resultPart1 = resolvePart1($inputPart1);

	}


	function resolvePart1($input) {

		$result = 0;

		$columns = 0;
		$rows = 0;

		$addRows = 0;
		$addCols = 0;

		$colSteps = 0;
		$rowSteps = 0;

		for ($i = 1; $i <= $input; ++$i) {

			$root = sqrt($i);

			if ((int) $root == $root) {++$columns;}

			if ($i / $columns > $rows) {++$rows;}

			if ($columns > $rows) {

				$addCols = 0;

				$newColSteps = floor($columns / 2);

				$newRowSteps = $rowSteps + $addRows;

				if ($addRows == 0) {

					$addRows = -1;

				}

				if ($newRowSteps == 0) {

					$addRows = +1;

				}

			} else {

				$addRows = 0;

				$newRowSteps = floor($rows / 2);

				$newColSteps = $colSteps + $addCols;

				if ($addCols == 0) {

					$addCols = -1;

				}

				if ($newColSteps == 0) {

					$addCols = +1;

				}

			}

			$rowSteps = $newRowSteps;
			$colSteps = $newColSteps;
			// echo 'id : '.$i.'.columns: '.$columns.' rows: '.$rows.' rowsteps: '.$rowSteps.' colsteps: '.$colSteps . '<br />';

		}

		return $result;

	}
?>

<p>day 3: find the shortest path in the circle memory: </p>

<textarea class="input" day=3 part=1 rows="1">
<?php echo $inputPart1; ?>
</textarea>

<p>sum: <span id="day3-part1-result"><?php echo $resultPart1; ?></span></p>
