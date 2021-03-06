<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Resources\BoardResource;

use App\Models\Board;

use Auth;

class BoardController extends Controller
{
    public function __construct()
    {
        // 인증에 대한 미들웨어
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function index() // 데이터 목록 가져오기
    {
        //return Board::all();
        // $allBoards = Board::all(); // 데이터 다 가져오기
        // dd(Board::select('id','writer','subject','content','created_at')->get());
        // return allBorads;
        // return Board::select('id','writer','subject','content','created_at')->get();
        $allBoards = Board::select('id','writer','subject','content','created_at')->get();
        $filteredBoards = BoardResource::collection($allBoards);
        
        return view('blog.list', [
            'postList' => $filteredBoards
        ]);
        
        // return view('blog.list', [
        //     'postList' => $posts
        // ]);

        //return BoardResource::collection(Board::all());
        //return view('blog/board');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // 새 데이터를 만드는 화면을 반환
    {
     //    return view('blog/board');
        // var_dump("create 메소드로 왔음"); 출력 dd / var_dump / print_r
        // print_r("create 메소드");
        return view('blog/board');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // 새 데이터를 추가 DB에
    {
        print_r($request->all());
       $board = new Board();
       $board->writer = 'user01';
       $board->subject = request('subject');
       $board->content = request('content');
       $board->save();

       return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // 특정 데이터를 가져오기 (하나)
    {
        // 매개변수로 들어오는 아이디에 해당하는 할 일 데이터를 가져옴
        // select * from todos where id = 2 이거랑 밑에 코드랑 같은 의미!
        // $fetchedTodo = Todo::find($id);
        // return $fetchedTodo

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // 기존 데이터를 수정하는 화면을 반환
    {
        return view('blog/board');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // 기존 데이터를 수정해서 수정된 데이터를 반환
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // 기존 데이터를 삭제
    {
        //
    }
}
