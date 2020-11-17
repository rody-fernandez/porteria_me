<?php 
use SistemaPorteria\Personas;
use SistemaPorteria\Motivo;
use SistemaPorteria\Empresa;
use SistemaPorteria\Cargo;

function get_legajo($var = null){
	return Personas::where('legajo',$var)->first();
}
function get_personas($var = null){
	return Personas::where('id',$var)->first();
}

function get_motivos($var = null){
	return Motivo::where('id',$var)->first();
}

function get_empresas($var = null){
	return Empresa::where('id',$var)->first();
}
function get_cargos($var = null){
	return Cargo::where('id',$var)->first();
}