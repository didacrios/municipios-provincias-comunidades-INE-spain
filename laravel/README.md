# Migración y Seeders para Laravel

Archivos listos para usar en tu proyecto Laravel con la división territorial de España (comunidades autónomas, provincias y municipios).

## Instalación

### 1. Migración

Copia el archivo de migración a tu proyecto:

```bash
cp migrations/2024_01_01_000000_create_spain_territorial_division_tables.php \
   tu-proyecto/database/migrations/
```

Ejecuta la migración:

```bash
php artisan migrate
```

### 2. Seeders

Copia los archivos de seeders a tu proyecto:

```bash
cp seeders/ComunidadesSeeder.php tu-proyecto/database/seeders/
cp seeders/ProvinciasSeeder.php tu-proyecto/database/seeders/
cp seeders/MunicipiosSeeder.php tu-proyecto/database/seeders/
```

### 3. Registrar los Seeders

Edita `database/seeders/DatabaseSeeder.php` y añade:

```php
public function run(): void
{
    $this->call([
        ComunidadesSeeder::class,
        ProvinciasSeeder::class,
        MunicipiosSeeder::class,
    ]);
}
```

### 4. Ejecutar los Seeders

```bash
php artisan db:seed
```

O ejecutarlos individualmente:

```bash
php artisan db:seed --class=ComunidadesSeeder
php artisan db:seed --class=ProvinciasSeeder
php artisan db:seed --class=MunicipiosSeeder
```

## Estructura de las Tablas

### Comunidades (19 registros)
- `id_comunidad` (tinyint, primary key)
- `nombre` (varchar 100)
- `created_at` / `updated_at`

### Provincias (52 registros)
- `provincia_id` (int, primary key)
- `comunidad_id` (tinyint, foreign key → comunidades)
- `nom_provincia` (varchar 45)
- `created_at` / `updated_at`

### Municipios (8,110+ registros)
- `id_municipio` (bigint, primary key, auto-increment)
- `provincia_id` (int, foreign key → provincias)
- `cod_municipio` (int)
- `DC` (int)
- `nom_municipi` (varchar 45)
- `created_at` / `updated_at`

## Notas de Rendimiento

El seeder de municipios contiene más de 8,000 registros. Para mejorar el rendimiento:

1. **Desactivar timestamps temporalmente** en el modelo si no los necesitas
2. **Usar transacciones** (Laravel lo hace automáticamente en seeders)
3. **Aumentar la memoria PHP** si es necesario: `php -d memory_limit=256M artisan db:seed`

## Fuente de Datos

- **Comunidades Autónomas**: http://www.ine.es/daco/daco42/codmun/cod_ccaa.htm
- **Provincias**: http://www.ine.es/daco/daco42/codmun/cod_provincia.htm
- **Municipios**: http://www.ine.es/daco/daco42/codmun/codmun13/13codmun.xls
- **Fecha de los datos**: 01/02/2013

## Uso en Modelos Laravel

### Ejemplo de Modelos

```php
// app/Models/Comunidad.php
class Comunidad extends Model
{
    protected $table = 'comunidades';
    protected $primaryKey = 'id_comunidad';

    public function provincias()
    {
        return $this->hasMany(Provincia::class, 'comunidad_id', 'id_comunidad');
    }
}

// app/Models/Provincia.php
class Provincia extends Model
{
    protected $primaryKey = 'provincia_id';

    public function comunidad()
    {
        return $this->belongsTo(Comunidad::class, 'comunidad_id', 'id_comunidad');
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'provincia_id', 'provincia_id');
    }
}

// app/Models/Municipio.php
class Municipio extends Model
{
    protected $primaryKey = 'id_municipio';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'provincia_id');
    }
}
```

### Ejemplo de Consultas

```php
// Obtener todas las provincias de Andalucía
$andalucia = Comunidad::where('nombre', 'Andalucía')->first();
$provincias = $andalucia->provincias;

// Obtener todos los municipios de Barcelona
$barcelona = Provincia::where('nom_provincia', 'Barcelona')->first();
$municipios = $barcelona->municipios;

// Obtener la comunidad de un municipio específico
$municipio = Municipio::find(1);
$comunidad = $municipio->provincia->comunidad;
```
