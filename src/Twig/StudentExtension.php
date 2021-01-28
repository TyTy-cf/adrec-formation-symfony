<?php


namespace App\Twig;


use App\Entity\Student;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class StudentExtension.php
 *
 * @author Kevin Tourret
 */
class StudentExtension extends AbstractExtension
{

    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        // Création d'un filtre twig cm_to_m qui appelle la fonction getHeightMetersFromCm présente dans cette classe
        return [
          new TwigFilter('cm_to_m', [$this, 'getHeightMetersFromCm']),
        ];
    }

    /**
     * @param Student $student
     * @return string
     */
    public function getHeightMetersFromCm(Student $student): string
    {
        if ($student->getHeight() !== null) {
            return ($student->getHeight() / 100) . 'm';
        }
        return 'students.gender.unknown';
    }
}
