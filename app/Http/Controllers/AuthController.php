use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|unique:users',
            'contrasena' => 'required|string|min:8',
            'nombre' => 'required|string',
            'telefono' => 'numeric',
            'domicilio' => 'string'
        ]);

        $user = Cliente::create([
            'email' => $request->email,
            'contrasena' => Hash::make($request->contrasena),
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'domicilio' => $request->domicilio
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'contrasena' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->contrasena, $user->contrasena)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out']);
    }
}