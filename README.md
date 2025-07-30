# Aplicacion de productividad ClockWork

# Estructura de la base de datos
```sql
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

insercion

INSERT INTO users (
    name,
    surname,
    username,
    email,
    email_verified_at,
    password,
    created_at,
    updated_at
) VALUES (
    'Ariel',
    'Antinori',
    'antinori',
    'antinori@example.com',
    NULL, -- No verificado aún
    '$2y$12$.z1PlwZpnJw1nOe1M5H/qO5ztu/etrqJMTpkCzc7kQ.S59HIPknba', -- hash bcrypt de 'password'
    NOW(),
    NOW()
);
```
