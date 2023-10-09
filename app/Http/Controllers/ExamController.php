<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\QnaExam;

class ExamController extends Controller
{
    //
    public function loadExamDashboard($id)
    {
        $qnaExam = Exam::where('enterance_id',$id)->with('getQnaExam')->get();
        if(count($qnaExam) > 0){
            // $attemptCount = ExamAttempt::where(['exam_id'=>$qnaExam[0]['id'],'user_id'=> auth()->user()->id])->count();
            // if($attemptCount >= $qnaExam[0]['attempt']){
            //     return view('student.exam-dashboard',['success'=>false,'msg'=>'Your exam Attemption has been completed','exam'=>$qnaExam]);
            // }
            if($qnaExam[0]['date'] == date('Y-m-d')){
                
                if(count($qnaExam[0]['getQnaExam']) > 0){

                    $qna = QnaExam::where('exam_id',$qnaExam[0]['id'])->with('question','answers')->inRandomOrder()->get();
                    return view('student.exam-dashboard',['success'=>true,'exam'=>$qnaExam,'qna'=>$qna]);

                }
                else{
                    return view('student.exam-dashboard',['success'=>false,'msg'=>'This exam is not available for now!','exam'=>$qnaExam]);
                }

            }
            else if($qnaExam[0]['date'] > date('Y-m-d')){
                return view('student.exam-dashboard',['success'=>false,'msg'=>'This exam will be start on '.$qnaExam[0]['date'],'exam'=>$qnaExam]);
            }
            else{
                return view('student.exam-dashboard',['success'=>false,'msg'=>'This exam has been expired on '.$qnaExam[0]['date'],'exam'=>$qnaExam]);
            }

        }
        else{
            return view('404');
        }
    }
}
