<?php


namespace App\Controller;


use App\Entity\Student;
use App\Repository\StudentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentsController extends AbstractController
{

    /**
     * @Route(path="/students", name="index_students")
     * @param StudentRepository $studentRepository
     * @return Response
     */
    public function indexStudents(StudentRepository $studentRepository): Response {
//        $students = $studentRepository->findAll();
//        $students = $studentRepository->findBy(
//            ['gender' => 'F'],
//            ['lastName' => 'ASC']
//        );
//        $students = $studentRepository->find(2);
//        $students = $studentRepository->findOneBy(['lastName' => 'Bradtke']);

        $students = $studentRepository->findByHeightMaxAndGender(180, 'M');
        return $this->render('students/index.html.twig', [
            'students' => $students,
        ]);
    }

    /**
     * @Route(path="/students/{idStudent}", name="show_students")
     * @ParamConverter("student", options={"mapping": { "idStudent": "id" }})
     *
     * @param Student $student
     * @return Response
     */
    public function showStudents(Student $student): Response {
        return $this->render('students/show.html.twig', [
            'student' => $student,
        ]);
    }
    
    /**
     * @Route(path="/students-gender", name="gender_students")
     * @param StudentRepository $studentRepository
     * @return Response
     */
    public function selectStudentsByGender(StudentRepository $studentRepository): Response {
        $students = $studentRepository->findByGender('F');
        return $this->render('students/index.html.twig', [
            'students' => $students,
        ]);
    }

}
