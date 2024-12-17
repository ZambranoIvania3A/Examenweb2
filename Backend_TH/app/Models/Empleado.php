class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados'; // Nombre de la tabla

    // Clave primaria personalizada
    protected $primaryKey = 'empleado_id';

    // Campos asignados
    protected $fillable = ['departamento_id', 'cargo_id', 'rol_id', 'ubicacion_id', 'nombre', 'apellido', 'fecha_nacimiento', 'email', 'telefono'];

    // Relaciones con otras tablas

    // Relación con la tabla Departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

    // Relación con la tabla Cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }

    // Relación con la tabla Ubicacion
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }

    // Un empleado puede tener múltiples formaciones académicas
    public function formaciones_academicas()
    {
        return $this->hasMany(FormacionAcademica::class, 'empleado_id');
    }

    // Un empleado puede tener múltiples historiales laborales
    public function historiales_laborales()
    {
        return $this->hasMany(HistorialLaboral::class, 'empleado_id');
    }

    // Un empleado puede tener múltiples licencias
    public function licencias()
    {
        return $this->hasMany(Licencia::class, 'empleado_id');
    }

    // Un empleado puede estar asociado a múltiples roles de pago
    public function roles_pago()
    {
        return $this->hasMany(RolPago::class, 'empleado_id');
    }

    // Un empleado puede tener múltiples sanciones
    public function sanciones()
    {
        return $this->hasMany(Sancion::class, 'empleado_id');
    }

    // Un empleado puede tener múltiples evaluaciones de desempeño
    public function evaluaciones_desempeno()
    {
        return $this->hasMany(EvaluacionDesempeno::class, 'empleado_id');
    }

    // Un empleado puede estar asociado a múltiples reclutamientos
    public function reclutamientos()
    {
        return $this->hasMany(Reclutamiento::class, 'empleado_
