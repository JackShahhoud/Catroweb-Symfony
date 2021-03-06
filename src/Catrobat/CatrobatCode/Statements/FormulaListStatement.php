<?php

namespace App\Catrobat\CatrobatCode\Statements;

/**
 * Class FormulaListStatement
 * @package App\Catrobat\CatrobatCode\Statements
 */
class FormulaListStatement extends Statement
{
  /**
   *
   */
  const X_POSITION = "X_POSITION";
  /**
   *
   */
  const Y_POSITION = "Y_POSITION";

  /**
   * @var
   */
  private $xPosition;
  /**
   * @var
   */
  private $yPosition;


  /**
   * FormulaListStatement constructor.
   *
   * @param $statementFactory
   * @param $xmlTree
   * @param $spaces
   */
  public function __construct($statementFactory, $xmlTree, $spaces)
  {
    parent::__construct($statementFactory, $xmlTree, $spaces - 1,
      "", "");
  }


  /**
   * @return string
   */
  public function executeChildren()
  {
    $code = '';
    $counter = 0;

    $statementCount = count($this->statements);
    foreach ($this->statements as $value)
    {

      $counter++;

      $code .= $value->execute();
      if ($counter < $statementCount)
      {
        $code .= ', ';
      }
    }

    return $code;
  }

  /**
   * @return string
   */
  public function executePlaceAtFormula()
  {
    $code = '';
    $endCode = '';

    $this->setVariables();


    if ($this->xPosition != null)
    {
      $code .= "X(" . $this->xPosition->execute() . ")";
    }

    if ($this->xPosition != null && $this->yPosition != null)
    {
      $code .= ', ';
    }

    if ($this->yPosition != null)
    {
      $code .= "Y(" . $this->yPosition->execute() . ")";
    }

    return $code . $endCode;
  }

  /**
   *
   */
  protected function setVariables()
  {

    foreach ($this->statements as $value)
    {
      if ($value instanceof FormulaStatement)
      {
        if ($value->getCategory() == self::X_POSITION)
        {
          $this->xPosition = $value;
        }
        else
        {
          if ($value->getCategory() == self::Y_POSITION)
          {
            $this->yPosition = $value;
          }
        }
      }
    }
  }
}
