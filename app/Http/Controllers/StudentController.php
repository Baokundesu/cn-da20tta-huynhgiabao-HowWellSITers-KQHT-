use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); // Sử dụng Eloquent để lấy thông tin sinh viên từ cơ sở dữ liệu

        return view('student', compact('students'));
    }

    public function addStudent(Request $request)
    {
        // Xử lý lưu thông tin sinh viên vào cơ sở dữ liệu
        $student = new Student;
        $student->name = $request->input('name');
        $student->score = $request->input('score');
        $student->save();

        return redirect('/student');
    }
}
