<?php

return [
    'userManagement' => [
        'title'          => 'Ajustes',
        'title_singular' => 'Ajustes',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Nombre',
            'title_helper'      => ' ',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Nombre',
            'title_helper'       => ' ',
            'permissions'        => 'Permisos',
            'permissions_helper' => ' ',
            'created_at'         => 'Creado en',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Actualizado en',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Borrado en',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nombre',
            'birthdate'               => 'Fecha de Nacimiento',
            'name_helper'              => ' ',
            'email'                    => 'Correo Electrónico',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Correo Electrónico verificado',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Contraseña',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Creado en',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Actualizado en',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Borrado en',
            'deleted_at_helper'        => ' ',
            'dni'                      => 'Cédula',
            'dni_helper'               => ' ',
            'approved'                 => 'Activo',
            'approved_helper'          => ' ',
        ],
    ],
    'club' => [
        'title'          => 'Equipos',
        'title_singular' => 'Equipo',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => 'Nombre del Equipo',
            'slug'              => 'Abreviado',
            'slug_helper'       => 'Nombre abreviado, ej: "BSC"',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
            'category'          => 'Categoría',
            'category_helper'   => ' ',
            'picture'           => 'Picture',
            'picture_helper'    => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categorías',
        'title_singular' => 'Categoría',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => 'Nombre completo del Equipo',
            'min_age'           => 'Edad Mínima',
            'min_age_helper'    => 'Edad desde la que se aceptan jugadores',
            'max_age'           => 'Edad Máxima',
            'max_age_helper'    => 'Edad hasta la que se aceptan jugadores',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
        ],
    ],
    'championship' => [
        'title'          => 'Campeonatos',
        'title_singular' => 'Campeonato',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => 'Nombre único del campeonato',
            'start_date'        => 'Fecha de Inicio',
            'start_date_helper' => 'Fecha en la que inicia el campeonato',
            'end_date'          => 'Fecha de Finalización',
            'end_date_helper'   => 'Fecha en la que finaliza el campeonato (Opcional)',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
            'category'          => 'Categoría',
            'category_helper'   => ' ',
            'active'            => 'Activo',
            'active_helper'     => ' ',
        ],
    ],
    'player' => [
        'title'          => 'Jugadores',
        'title_singular' => 'Jugador',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => 'Nombre completo del jugador',
            'dni'               => 'Cédula',
            'dni_helper'        => ' ',
            'approved'         => 'Activo',
            'approved_helper'  => ' ',
            'birthdate'         => 'Fecha de Nacimiento',
            'birthdate_helper'  => ' ',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
        ],
    ],
    'enrollment' => [
        'title'          => 'Inscripciones',
        'title_singular' => 'Inscripción',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'championship'        => 'Campeonato',
            'championship_helper' => ' ',
            'club'                => 'Equipo',
            'club_helper'         => ' ',
            'created_at'          => 'Creado en',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Actualizado en',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Borrado en',
            'deleted_at_helper'   => ' ',
            'players'             => 'Jugadores',
            'players_helper'      => ' ',
            'name'                => 'Nombre',
            'name_helper'         => ' ',
        ],
    ],
    'match' => [
        'title'          => 'Partidos',
        'title_singular' => 'Partido',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nombre',
            'name_helper'       => ' ',
            'local'             => 'Local',
            'local_helper'      => ' ',
            'away'              => 'Visitante',
            'away_helper'       => ' ',
            'created_at'        => 'Creado en',
            'created_at_helper' => ' ',
            'updated_at'        => 'Actualizado en',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Borrado en',
            'deleted_at_helper' => ' ',
            'start_date'        => 'Fecha y Hora',
            'start_date_helper' => ' ',
        ],
    ],
    'event' => [
        'title'          => 'Eventos',
        'title_singular' => 'Evento',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'type'               => 'Tipo de Evento',
            'type_helper'        => ' ',
            'minute'             => 'Minuto',
            'minute_helper'      => 'Minuto del gol, cambio o tarjeta',
            'created_at'         => 'Creado en',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Actualizado en',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Borrado en',
            'deleted_at_helper'  => ' ',
            'description'        => 'Detalle',
            'description_helper' => ' ',
            'match'              => 'Partido',
            'match_helper'       => ' ',
        ],
    ],
];
