use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'score']; // Các trường có thể điền dữ liệu
}
