<?php


namespace App\Controller;


use App\Repository\StudentRepository;
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
        $students = $studentRepository->findAll();
//        $students = $studentRepository->findBy(
//            ['gender' => 'F'],
//            ['lastName' => 'ASC']
//        );
//        $students = $studentRepository->find(2);
//        $students = $studentRepository->findOneBy(['lastName' => 'Bradtke']);
        dump($students);
        return $this->render('students/index.html.twig', [
            'students' => $students,
        ]);
    }
}