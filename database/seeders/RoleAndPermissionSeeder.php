<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            ['name' => 'be god', 'description' => 'God Mode !', 'guard_name' => 'web'],
            ['name' => 'dev', 'description' => 'Developer', 'guard_name' => 'web'],
            ['name' => 'Agenda UST: Administrador', 'description' => 'Permiso administrador de módulo reservas Unidad Salud del Trabajador', 'guard_name' => 'web'],
            ['name' => 'Agenda UST: Funcionario', 'description' => 'Permiso funcionario de módulo reservas Unidad Salud del Trabajador', 'guard_name' => 'web'],
            ['name' => 'Agenda UST: Secretaria', 'description' => 'Permiso secretaria de módulo reservas Unidad Salud del Trabajador', 'guard_name' => 'web'],
            ['name' => 'Agreement: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Agreement: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Agreement: manage municipalities and signers', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Agreement: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Allowances: all', 'description' => 'Permite visualizar todos los viáticos', 'guard_name' => 'web'],
            ['name' => 'Allowances: all establishment', 'description' => 'Permite visualizar todos los viáticos de todos los establecimientos', 'guard_name' => 'web'],
            ['name' => 'Allowances: contabilidad', 'description' => 'Permite revisión inicial del formulario contabilidad', 'guard_name' => 'web'],
            ['name' => 'Allowances: create', 'description' => 'Permite crear viáticos', 'guard_name' => 'web'],
            ['name' => 'Allowances: director', 'description' => 'Permite visualizar viáticos que requieren firma de dirección', 'guard_name' => 'web'],
            ['name' => 'Allowances: reports', 'description' => 'Permite acceder a los reportes del módulo', 'guard_name' => 'web'],
            ['name' => 'Allowances: sirh', 'description' => 'Permite revisión inicial del formulario e ingreso de folio sirh', 'guard_name' => 'web'],
            ['name' => 'amiPASS', 'description' => 'Permiso para acceder al modulo de bienestar/amipass', 'guard_name' => 'web'],
            ['name' => 'Asignacion Estimulos', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Authorities: create', 'description' => 'Permite crear autoridades', 'guard_name' => 'web'],
            ['name' => 'Authorities: edit', 'description' => 'Permite editar una autoridad (sólo para expertos)', 'guard_name' => 'web'],
            ['name' => 'Authorities: view', 'description' => 'Permite ver el módulo de autoridades', 'guard_name' => 'web'],
            ['name' => 'Calendar: aps', 'description' => 'Poder ver Mesa Técnica APS', 'guard_name' => 'web'],
            ['name' => 'Calendar: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Communefiles: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Communefiles: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Communefiles: upload', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Communefiles: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Documents: add number', 'description' => 'Para oficina de partes o secretarias, asignar un número a un documento', 'guard_name' => 'web'],
            ['name' => 'Documents: admin', 'description' => 'Permite eliminar número, archivo adjunto y documento completo', 'guard_name' => 'web'],
            ['name' => 'Documents: create', 'description' => 'Permite crear un documento', 'guard_name' => 'web'],
            ['name' => 'Documents: delete document', 'description' => 'Permite borrar un documento que no tenga archivo adjunto o firmas (Sólo Administradores)', 'guard_name' => 'web'],
            ['name' => 'Documents: edit', 'description' => 'Permite editar un documento creado', 'guard_name' => 'web'],
            ['name' => 'Documents: signatures and distribution', 'description' => 'Permite acceso al módulo de firmas y distribución', 'guard_name' => 'web'],
            ['name' => 'Documents: signatures and distribution v2', 'description' => 'Permite acceder al crear solicitud de firma nuevo modulo v2', 'guard_name' => 'web'],
            ['name' => 'Drugs', 'description' => 'Permite acceder al menú del módulo de drogas', 'guard_name' => 'web'],
            ['name' => 'Drugs: add protocols', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: add results from ISP', 'description' => 'Permite poder agregar resultados de análisis realizado por el ISP', 'guard_name' => 'web'],
            ['name' => 'Drugs: create receptions', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: delete destructions', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: destroy drugs', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: edit date receptions', 'description' => 'Permite editar la fecha de una recepción', 'guard_name' => 'web'],
            ['name' => 'Drugs: edit receptions', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: manage courts', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: manage parameters', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: manage police units', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: manage substances', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: view receptions', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Drugs: view reports', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Ges: user', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Health Plan', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'HIS Modification Request: Manager', 'description' => 'Administrador de solicitudes de modificación del HIS APS (Referente SIDRA)', 'guard_name' => 'web'],
            ['name' => 'HIS Modification Request: User', 'description' => 'Permite hacer solicitudes de modificación al HIS APS', 'guard_name' => 'web'],
            ['name' => 'HotelBooking: Administrador', 'description' => 'Administrador del módulo de reserva de cabañas', 'guard_name' => 'web'],
            ['name' => 'HotelBooking: User', 'description' => 'Permiso para los usuarios del modulo de reserva de cabañas', 'guard_name' => 'web'],
            ['name' => 'Identify Need: create', 'description' => 'Permite crear procesos de Detección de Necesidades de Capacitación', 'guard_name' => 'web'],
            ['name' => 'Indicators: manager', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Indicators: manager meta7', 'description' => 'Permiso para administrar meta 7 en Metas Sanitarias Ley N° 19.813', 'guard_name' => 'web'],
            ['name' => 'Indicators: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Integrity: manage complaints', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Inventory', 'description' => 'Permite acceder al menú de inventario', 'guard_name' => 'web'],
            ['name' => 'Inventory: edit', 'description' => 'Permite editar el item de inventario', 'guard_name' => 'web'],
            ['name' => 'Inventory: edit act reception confirmation', 'description' => 'Permite editar los datos del acta de recepción de confirmación', 'guard_name' => 'web'],
            ['name' => 'Inventory: index', 'description' => 'Permite visualizar todos los productos inventariados', 'guard_name' => 'web'],
            ['name' => 'Inventory: last receptions', 'description' => 'Permite visualizar los últimos ingresos de la bodega', 'guard_name' => 'web'],
            ['name' => 'Inventory: mainteners', 'description' => 'Permite acceder a los mantenedores de inventario', 'guard_name' => 'web'],
            ['name' => 'Inventory: manager', 'description' => 'Permite acceder a todas las funcionalidades de inventario', 'guard_name' => 'web'],
            ['name' => 'Inventory: pending inventory', 'description' => 'Permite visualizar todos los inventarios pendientes', 'guard_name' => 'web'],
            ['name' => 'Inventory: place maintainer', 'description' => 'Permite acceder al mantenedor de lugares', 'guard_name' => 'web'],
            ['name' => 'Job Position Profile: all', 'description' => 'Permite acceder a todo el listado de perfiles de cargo', 'guard_name' => 'web'],
            ['name' => 'Job Position Profile: audit', 'description' => 'Permite acceder al registro de auditoría del módulo', 'guard_name' => 'web'],
            ['name' => 'Job Position Profile: create', 'description' => 'Permite crear la creación de perfiles de cargo', 'guard_name' => 'web'],
            ['name' => 'Job Position Profile: edit', 'description' => 'Permite editar cualquier perfil de cargo', 'guard_name' => 'web'],
            ['name' => 'Job Position Profile: review', 'description' => 'Permite realizar la revisión del perfil de cargo para aprobación', 'guard_name' => 'web'],
            ['name' => 'LE Extra Plan: Carga', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'LE Extra Plan: Monitoreo', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Mammography: admin', 'description' => 'Permite acceder a los resultados del booking de Mammography', 'guard_name' => 'web'],
            ['name' => 'News: create', 'description' => 'Permite crear noticias', 'guard_name' => 'web'],
            ['name' => 'OrganizationalUnits: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'OrganizationalUnits: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'OrganizationalUnits: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'OrganizationalUnits: sirh association', 'description' => 'Permite asociar unidades organizacionales ionline con unidades organizacionales sirh', 'guard_name' => 'web'],
            ['name' => 'Parameters: Classification', 'description' => 'Permiso para poder clasificar el tipo de inventario', 'guard_name' => 'web'],
            ['name' => 'Parameters: COMGES cutoffdates', 'description' => 'Mantenedor fecha de corte de COMGES', 'guard_name' => 'web'],
            ['name' => 'Parameters: holidays', 'description' => 'Mantenedor de días feriados', 'guard_name' => 'web'],
            ['name' => 'Parameters: locations', 'description' => 'Mantenedor de ubicaciones (edificios)', 'guard_name' => 'web'],
            ['name' => 'Parameters: places', 'description' => 'Mantenedor de lugares (oficinas, pasillos, comedores, etc.)', 'guard_name' => 'web'],
            ['name' => 'Parameters: professions', 'description' => 'Mantenedor de profesiones', 'guard_name' => 'web'],
            ['name' => 'Parameters: programs', 'description' => 'Mantenedor de programas', 'guard_name' => 'web'],
            ['name' => 'Parameters: UNSPSC', 'description' => 'Mantenedores de segmentos y productos del estandard UNSPSC que ocupa mercado público', 'guard_name' => 'web'],
            ['name' => 'Partes: delete', 'description' => 'Permite borrar un parte', 'guard_name' => 'web'],
            ['name' => 'Partes: director', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Partes: numerator', 'description' => 'Aquellos que pueden numerar un documento, les llega un mail por cada documento a enumerar', 'guard_name' => 'web'],
            ['name' => 'Partes: oficina', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Partes: user', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Payments', 'description' => 'Permite acceso al módulo de Estados de pago', 'guard_name' => 'web'],
            ['name' => 'Payments: cenabast bypass', 'description' => 'permiso para poder hacer bypass cuando se sube un documento ya firmado anteriormente por ende no debería entrar al proceso de firma por farmaceutico-jefe (carga retroactiva)', 'guard_name' => 'web'],
            ['name' => 'Payments: return to review', 'description' => 'Retorna las facturas a la bandeja de revisión', 'guard_name' => 'web'],
            ['name' => 'Payments: viewer', 'description' => 'Permite acceso al módulo de Estados de pago, pero solamente puede ver y no modificar nada', 'guard_name' => 'web'],
            ['name' => 'Pharmacy', 'description' => 'Permiso general para ingresar a módulo', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: Administrator', 'description' => 'administrador del sistema', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: change pharmacy', 'description' => 'Sirve para que usuario del hospital pueda cambiarse de farmacias segun requiera', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: create establishments', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: create products', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: create programs', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: create suppliers', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: deliver', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: dispatch', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: edit_delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: inventory adjustment', 'description' => 'permite realizar ajustes de inventario', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: mantenedores', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: purchase', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: receiving', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: reports', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: Servicios generales (id:4)', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: sign', 'description' => 'Permite firmar actas de recepción en modulo de compras.', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: transfer', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: transfer view AHO', 'description' => 'Vista perfil comuna Alto Hospicio ayudas técnicas', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: transfer view IQQ', 'description' => 'Vista perfil comuna de Iquique ayudas técnicas', 'guard_name' => 'web'],
            ['name' => 'Pharmacy: transfer view ortesis', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProfessionalHour: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: audit', 'description' => 'Auditoría para el módulo de Programación Numérica', 'guard_name' => 'web'],
            ['name' => 'Programming: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: create action type', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: create activity', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: create ministerial', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: create professional', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: report', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: status', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Programming: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingDay: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingItem: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingItem: duplicate', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingItem: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingItem: evaluate', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'ProgrammingItem: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Purchase Plan: all', 'description' => 'Permite visualizar todos los planes de compras', 'guard_name' => 'web'],
            ['name' => 'Purchase Plan: create', 'description' => 'Permite crear planes de compras', 'guard_name' => 'web'],
            ['name' => 'Purchase Plan: reports', 'description' => 'Permite acceder a los reportes del módulo de plan de compras', 'guard_name' => 'web'],
            ['name' => 'Receptions: admin', 'description' => 'Usuario administrador', 'guard_name' => 'web'],
            ['name' => 'Receptions: load file retroactive', 'description' => 'Permite cargar actas firmadas retroactivamente', 'guard_name' => 'web'],
            ['name' => 'Receptions: load support file', 'description' => 'Permite cargar documentos de respaldo', 'guard_name' => 'web'],
            ['name' => 'Receptions: upload to mercado público', 'description' => 'Permite marcar la recepción como subido a mercado público\'', 'guard_name' => 'web'],
            ['name' => 'Receptions: user', 'description' => 'Usuario normal', 'guard_name' => 'web'],
            ['name' => 'Rem: admin', 'description' => 'Administrador de carga de REMs', 'guard_name' => 'web'],
            ['name' => 'Rem: user', 'description' => 'Usuario cargador de REMs', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: admin', 'description' => 'Administrador de staff de reemplazo', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: assign request', 'description' => 'Permite asignar solicitudes a funcionarios de la unidad de reclutamiento y selección', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: create request', 'description' => 'Permite crear solicitudes de reemplazo', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: create staff', 'description' => 'Permite crear staff (postulantes)', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: list rrhh', 'description' => 'Permite visualizar el listado de staff de reemplazo', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: manage', 'description' => 'Permite editar parámetros del módulo', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: personal sign', 'description' => 'Permite a funcionarios de unidad de personal aprobar o declinar solicitudes', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: staff manage', 'description' => 'Permite gestionar staff por unidad organizacional', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: technical evaluation', 'description' => 'Permite acceder al listado de solicitudes aceptadas para evaluación técnica', 'guard_name' => 'web'],
            ['name' => 'Replacement Staff: view requests', 'description' => 'Permite visualizar requerimientos', 'guard_name' => 'web'],
            ['name' => 'Request Forms: all', 'description' => 'Ver todos los formularios de requerimiento independiente de su estado', 'guard_name' => 'web'],
            ['name' => 'Request Forms: audit', 'description' => 'Auditoría para el módulo de abastecimiento', 'guard_name' => 'web'],
            ['name' => 'Request Forms: boss', 'description' => 'Permisos para la jefatura de abastecimiento', 'guard_name' => 'web'],
            ['name' => 'Request Forms: config', 'description' => 'Permite editar mantenedores de Request Forms', 'guard_name' => 'web'],
            ['name' => 'Request Forms: purchaser', 'description' => 'Permite acceso a módulo de compradores', 'guard_name' => 'web'],
            ['name' => 'Request Forms: reports', 'description' => 'Permite acceder a los reportes del módulo de abastecimiento', 'guard_name' => 'web'],
            ['name' => 'Requirements: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Requirements: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Resolutions', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Resources: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Resources: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Resources: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Reviews: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Reviews: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Reviews: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Reviews: rectify', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Reviews: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'RNI Database: admin', 'description' => 'Acceso a carga de base datos RNI', 'guard_name' => 'web'],
            ['name' => 'RNI Database: view', 'description' => 'Acceso a descarga de base datos RNI', 'guard_name' => 'web'],
            ['name' => 'Rrhh: birthday', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Rrhh: wellfair', 'description' => 'Permiso para el módulo de Bienestar', 'guard_name' => 'web'],
            ['name' => 'Service Request', 'description' => 'Módulo de honorarios (ex pukaña)', 'guard_name' => 'web'],
            ['name' => 'Service Request: accept all requests', 'description' => 'Permite acepta todas las solicitudes de contrato de honorario', 'guard_name' => 'web'],
            ['name' => 'Service Request: active contracts report', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: add fulfillments', 'description' => 'Permiso para agregar fulfillments de forma individual', 'guard_name' => 'web'],
            ['name' => 'Service Request: additional data', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: additional data finanzas', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: additional data oficina partes', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: additional data rrhh', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: audit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: change signature flow', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: compliance', 'description' => 'Permiso para ver reporte de cumplimiento', 'guard_name' => 'web'],
            ['name' => 'Service Request: consolidated data', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: delete fulfillments', 'description' => 'Permiso para eliminar fulfillments de forma individual', 'guard_name' => 'web'],
            ['name' => 'Service Request: delete request', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: delete signed certificate', 'description' => 'Borrar certificado de cumplimiento firmado', 'guard_name' => 'web'],
            ['name' => 'Service Request: derive requests', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: export sirh', 'description' => 'Permite exportar contratos creados a Sirh', 'guard_name' => 'web'],
            ['name' => 'Service Request: export sirh mantenedores', 'description' => 'Acceso a mantenedores para usuarios que hacen exportación sirh', 'guard_name' => 'web'],
            ['name' => 'Service Request: fulfillments', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: fulfillments finance', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: fulfillments responsable', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: fulfillments rrhh', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: maintainers', 'description' => 'mantenedores del sistema de honorarios', 'guard_name' => 'web'],
            ['name' => 'Service Request: pending requests', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: program_consolidated_report', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: report excel', 'description' => 'para que puedan descargar excel', 'guard_name' => 'web'],
            ['name' => 'Service Request: report payed', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: report sr continuity', 'description' => 'Reporte continuidad de solicitudes', 'guard_name' => 'web'],
            ['name' => 'Service Request: report to pay', 'description' => 'Acceso a reporte para pagos', 'guard_name' => 'web'],
            ['name' => 'Service Request: sign document', 'description' => 'Firmar documentos Service Request', 'guard_name' => 'web'],
            ['name' => 'Service Request: transfer requests', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: turno de llamado', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Service Request: with resolution', 'description' => 'Acceso a reporte de Contratación Honorarios \'Solicitudes con resolución cargada\'', 'guard_name' => 'web'],
            ['name' => 'Shift Management: approval extra day request', 'description' => 'Módulo de turno, habilitado para aprobar y rechazar solicitudes de dias extras', 'guard_name' => 'web'],
            ['name' => 'Shift Management: view', 'description' => 'Módulo de turno, Ver', 'guard_name' => 'web'],
            ['name' => 'Store', 'description' => 'Permite acceder al menú de bodega', 'guard_name' => 'web'],
            ['name' => 'Store: add invoice', 'description' => 'Permite cargar facturas a uno o más ingresos', 'guard_name' => 'web'],
            ['name' => 'Store: bincard report', 'description' => 'Permite visualizar el reporte bincard', 'guard_name' => 'web'],
            ['name' => 'Store: Cenabast', 'description' => 'Permiso para acceso a bodega de CENABAST donde se sube el Acta firmada de acuerdo a un DTE', 'guard_name' => 'web'],
            ['name' => 'Store: create dispatch', 'description' => 'Permite crear egreso', 'guard_name' => 'web'],
            ['name' => 'Store: create reception by donation', 'description' => 'Permite crear ingreso normal o por donación', 'guard_name' => 'web'],
            ['name' => 'Store: create reception by purcharse order', 'description' => 'Permite crear ingreso por orden de compra', 'guard_name' => 'web'],
            ['name' => 'Store: index', 'description' => 'Listar las bodegas', 'guard_name' => 'web'],
            ['name' => 'Store: list dispatchs', 'description' => 'Permite visualizar la lista de los egresos', 'guard_name' => 'web'],
            ['name' => 'Store: list receptions', 'description' => 'Permite visualizar la lista de los ingresos', 'guard_name' => 'web'],
            ['name' => 'Store: maintainer programs', 'description' => 'Permite acceder al mantenedor de programas', 'guard_name' => 'web'],
            ['name' => 'Store: maintainers', 'description' => 'Permite acceder a los mantenedores de la bodega', 'guard_name' => 'web'],
            ['name' => 'Store: warehouse manager', 'description' => 'Permite gestionar todas las bodegas', 'guard_name' => 'web'],
            ['name' => 'Suitability: admin', 'description' => 'Encargado de Idoneidad de cada Colegio', 'guard_name' => 'web'],
            ['name' => 'Suitability: ssi', 'description' => 'Encargado de Idoneidad dentro del SSI', 'guard_name' => 'web'],
            ['name' => 'Summary: admin', 'description' => 'Permiso de módulo de Sumario de administrador', 'guard_name' => 'web'],
            ['name' => 'Summary: admin viewer', 'description' => 'Administrador del módulo de sumarios pero con permisos solamente para ver los sumarios y no modificar nada del contenido', 'guard_name' => 'web'],
            ['name' => 'Summary: user', 'description' => 'Permiso de usuario de Summario', 'guard_name' => 'web'],
            ['name' => 'Tickets: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Tickets: manage', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Tickets: TI', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'TrainingItem: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'TrainingItem: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'TrainingItem: view', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: assign permission', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: assign roles', 'description' => 'Asignar roles a usuarios', 'guard_name' => 'web'],
            ['name' => 'Users: create', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: delete', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: edit', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: must change password', 'description' => '', 'guard_name' => 'web'],
            ['name' => 'Users: no attendance record manager', 'description' => 'Para quien registra la justificación cuando no se marca en el reloj control', 'guard_name' => 'web'],
            ['name' => 'Users: reset password option', 'description' => 'Permite ver el botón para resetear password del usuario', 'guard_name' => 'web'],
            ['name' => 'Users: send mail verification', 'description' => 'Permite enviar un email de verificación de correo al usuario', 'guard_name' => 'web'],
            ['name' => 'Users: show access logs', 'description' => 'Permite ver el registro de accesos al sistema de los usuarios', 'guard_name' => 'web'],
        ];

        Permission::insert($permissions);

        $role = Role::create(['name' => 'Agenda Salud del Trabajdor: Administrador', 'description' => '']);
        $role->givePermissionTo('Agenda UST: Administrador');

        $role = Role::create(['name' => 'Agenda Salud del Trabajdor: Funcionario', 'description' => '']);
        $role->givePermissionTo('Agenda UST: Funcionario');

        $role = Role::create(['name' => 'Agenda Salud del Trabajdor: Secretaria', 'description' => '']);
        $role->givePermissionTo('Agenda UST: Secretaria');

        $role = Role::create(['name' => 'Director', 'description' => '']);
        $role->givePermissionTo([
            'Documents: create',
            'Documents: edit',
            'Calendar: view',
            'Requirements: create',
            'Partes: user',
            'Partes: director',
            'Partes: oficina',
            'Documents: signatures and distribution',
            'Calendar: aps',
            'Receptions: user',
            'Purchase Plan: reports'
        ]);

        $role = Role::create(['name' => 'Drogas: Jefe de unidad', 'description' => 'NO ASIGNAR a funcionarios fuera de la unidad, queda el registro de ingreso.']);
        $role->givePermissionTo('Drugs: view receptions');
        $role->givePermissionTo('Drugs: create receptions');
        $role->givePermissionTo('Drugs: edit receptions');
        $role->givePermissionTo('Drugs: destroy drugs');
        $role->givePermissionTo('Drugs: view reports');
        $role->givePermissionTo('Drugs: manage parameters');
        $role->givePermissionTo('Drugs: manage substances');
        $role->givePermissionTo('Drugs: manage courts');
        $role->givePermissionTo('Drugs: manage police units');
        $role->givePermissionTo('Drugs: delete destructions');
        $role->givePermissionTo('Drugs: add protocols');
        $role->givePermissionTo('Drugs: add results from ISP');
        $role->givePermissionTo('Drugs');
        $role->givePermissionTo('Drugs: edit date receptions');

        $role = Role::create(['name' => 'Drogas: Recepcionista', 'description' => 'Para los que realizan la recepción y analizan las sustancias.']);
        $role->givePermissionTo('Drugs: view receptions');
        $role->givePermissionTo('Drugs: create receptions');
        $role->givePermissionTo('Drugs: edit receptions');
        $role->givePermissionTo('Drugs: destroy drugs');
        $role->givePermissionTo('Drugs: view reports');
        $role->givePermissionTo('Drugs: manage parameters');
        $role->givePermissionTo('Drugs: manage police units');
        $role->givePermissionTo('Drugs: add protocols');
        $role->givePermissionTo('Drugs');

        $role = Role::create(['name' => 'Drogas: Usuario administrativo', 'description' => '']);
        $role->givePermissionTo('Drugs: view receptions');
        $role->givePermissionTo('Drugs: view reports');
        $role->givePermissionTo('Drugs: manage parameters');
        $role->givePermissionTo('Drugs: manage courts');
        $role->givePermissionTo('Drugs: add results from ISP');
        $role->givePermissionTo('Drugs');

        $role = Role::create(['name' => 'Farmacia: Administrador', 'description' => 'administrador del sistema']);
        $role->givePermissionTo('Pharmacy: receiving');
        $role->givePermissionTo('Pharmacy: dispatch');
        $role->givePermissionTo('Pharmacy: purchase');
        $role->givePermissionTo('Pharmacy: reports');
        $role->givePermissionTo('Pharmacy: mantenedores');
        $role->givePermissionTo('Pharmacy: create');
        $role->givePermissionTo('Pharmacy: edit_delete');
        $role->givePermissionTo('Pharmacy: create products');
        $role->givePermissionTo('Pharmacy: create establishments');
        $role->givePermissionTo('Pharmacy: create suppliers');
        $role->givePermissionTo('Pharmacy: create programs');
        $role->givePermissionTo('Pharmacy: deliver');
        $role->givePermissionTo('Pharmacy: sign');
        $role->givePermissionTo('Pharmacy: Administrator');
        $role->givePermissionTo('Pharmacy');
        $role->givePermissionTo('Pharmacy: change pharmacy');
        $role->givePermissionTo('Pharmacy: inventory adjustment');

        $role = Role::create(['name' => 'Farmacia: Bodeguero', 'description' => 'Funcionario normal de Bodega']);
        $role->givePermissionTo('Pharmacy: receiving');
        $role->givePermissionTo('Pharmacy: dispatch');
        $role->givePermissionTo('Pharmacy: purchase');
        $role->givePermissionTo('Pharmacy: reports');
        $role->givePermissionTo('Pharmacy: mantenedores');
        $role->givePermissionTo('Pharmacy: create');
        $role->givePermissionTo('Pharmacy: edit_delete');
        $role->givePermissionTo('Pharmacy: create products');
        $role->givePermissionTo('Pharmacy: create suppliers');
        $role->givePermissionTo('Pharmacy: sign');
        $role->givePermissionTo('Pharmacy');

        $role = Role::create(['name' => 'Honorarios: Creador de solicitud de contratos', 'description' => 'Responsable (ex pukaña)']);
        $role->givePermissionTo('Service Request');
        $role->givePermissionTo('Service Request: fulfillments');
        $role->givePermissionTo('Service Request: fulfillments responsable');
        $role->givePermissionTo('Service Request: accept all requests');

        $role = Role::create(['name' => 'Honorarios: Finanzas', 'description' => '(Ex Pukaña)']);
        $role->givePermissionTo('Service Request');
        $role->givePermissionTo('Service Request: consolidated data');
        $role->givePermissionTo('Service Request: additional data');
        $role->givePermissionTo('Service Request: additional data finanzas');
        $role->givePermissionTo('Service Request: pending requests');
        $role->givePermissionTo('Service Request: audit');
        $role->givePermissionTo('Service Request: fulfillments');
        $role->givePermissionTo('Service Request: fulfillments finance');
        $role->givePermissionTo('Service Request: report to pay');
        $role->givePermissionTo('Service Request: report payed');

        $role = Role::create(['name' => 'Honorarios: RRHH', 'description' => 'Solo para recursos humanos']);
        $role->givePermissionTo('Service Request');
        $role->givePermissionTo('Service Request: consolidated data');
        $role->givePermissionTo('Service Request: additional data');
        $role->givePermissionTo('Service Request: additional data rrhh');
        $role->givePermissionTo('Service Request: delete request');
        $role->givePermissionTo('Service Request: pending requests');
        $role->givePermissionTo('Service Request: audit');
        $role->givePermissionTo('Service Request: fulfillments');
        $role->givePermissionTo('Service Request: fulfillments rrhh');
        $role->givePermissionTo('Service Request: transfer requests');
        $role->givePermissionTo('Service Request: with resolution');
        $role->givePermissionTo('Service Request: maintainers');
        $role->givePermissionTo('Service Request: report to pay');
        $role->givePermissionTo('Service Request: report payed');
        $role->givePermissionTo('Service Request: change signature flow');
        $role->givePermissionTo('Service Request: report excel');
        $role->givePermissionTo('Service Request: delete signed certificate');
        $role->givePermissionTo('Service Request: report sr continuity');
        $role->givePermissionTo('Service Request: accept all requests');
        $role->givePermissionTo('Service Request: delete fulfillments');
        $role->givePermissionTo('Service Request: program_consolidated_report');
        $role->givePermissionTo('Service Request: active contracts report');
        $role->givePermissionTo('Service Request: add fulfillments');

        $role = Role::create(['name' => 'Inventario: Administrador', 'description' => '']);
        $role->givePermissionTo('Inventory');
        $role->givePermissionTo('Inventory: index');
        $role->givePermissionTo('Inventory: last receptions');
        $role->givePermissionTo('Inventory: pending inventory');
        $role->givePermissionTo('Inventory: mainteners');
        $role->givePermissionTo('Inventory: manager');
        $role->givePermissionTo('Inventory: edit');
        $role->givePermissionTo('Inventory: place maintainer');
        $role->givePermissionTo('Inventory: edit act reception confirmation');

        $role = Role::create(['name' => 'Inventario: Usuario básico', 'description' => '']);
        $role->givePermissionTo('Inventory');
        $role->givePermissionTo('Inventory: index');
        $role->givePermissionTo('Inventory: pending inventory');
        $role->givePermissionTo('Inventory: edit');

        $role = Role::create(['name' => 'Jefe Finanzas', 'description' => '']);
        $role->givePermissionTo('Documents: add number');
        $role->givePermissionTo('Partes: director');
        $role->givePermissionTo('Agreement: view');
        $role->givePermissionTo('Service Request: derive requests');
        $role->givePermissionTo('Service Request: sign document');
        $role->givePermissionTo('Shift Management: view');
        $role->givePermissionTo('Replacement Staff: create request');
        $role->givePermissionTo('Replacement Staff: view requests');
        $role->givePermissionTo('Request Forms: all');
        $role->givePermissionTo('Replacement Staff: staff manage');
        $role->givePermissionTo('Inventory');
        $role->givePermissionTo('Inventory: index');
        $role->givePermissionTo('Inventory: last receptions');
        $role->givePermissionTo('Inventory: pending inventory');
        $role->givePermissionTo('Inventory: mainteners');
        $role->givePermissionTo('Inventory: manager');
        $role->givePermissionTo('Allowances: all');
        $role->givePermissionTo('Payments');
        $role->givePermissionTo('Purchase Plan: create');
        $role->givePermissionTo('Purchase Plan: all');
        $role->givePermissionTo('Purchase Plan: reports');

        $role = Role::create(['name' => 'Oficina de partes', 'description' => 'Para los funcionarios de oficina de partes']);
        $role->givePermissionTo('Documents: create');
        $role->givePermissionTo('Documents: edit');
        $role->givePermissionTo('Calendar: view');
        $role->givePermissionTo('Indicators: view');
        $role->givePermissionTo('Authorities: view');
        $role->givePermissionTo('Requirements: create');
        $role->givePermissionTo('Partes: user');
        $role->givePermissionTo('Partes: director');
        $role->givePermissionTo('Partes: oficina');
        $role->givePermissionTo('Documents: signatures and distribution');
        $role->givePermissionTo('Partes: delete');
        $role->givePermissionTo('Partes: numerator');
        $role->givePermissionTo('Documents: admin');

        $role = Role::create(['name' => 'Programación Numérica: Administrador', 'description' => '']);
        $role->givePermissionTo('Programming: create');
        $role->givePermissionTo('Programming: create action type');
        $role->givePermissionTo('Programming: create activity');
        $role->givePermissionTo('Programming: create ministerial');
        $role->givePermissionTo('Programming: create professional');
        $role->givePermissionTo('Programming: edit');
        $role->givePermissionTo('Programming: view');
        $role->givePermissionTo('ProgrammingItem: edit');
        $role->givePermissionTo('ProgrammingItem: delete');
        $role->givePermissionTo('TrainingItem: delete');
        $role->givePermissionTo('ProfessionalHour: view');
        $role->givePermissionTo('ProgrammingDay: view');
        $role->givePermissionTo('ProgrammingItem: view');
        $role->givePermissionTo('TrainingItem: view');
        $role->givePermissionTo('Programming: report');
        $role->givePermissionTo('Communefiles: create');
        $role->givePermissionTo('Communefiles: edit');
        $role->givePermissionTo('Communefiles: upload');
        $role->givePermissionTo('Reviews: view');
        $role->givePermissionTo('Reviews: edit');
        $role->givePermissionTo('Programming: status');
        $role->givePermissionTo('Reviews: delete');
        $role->givePermissionTo('ProgrammingItem: duplicate');
        $role->givePermissionTo('TrainingItem: edit');
        $role->givePermissionTo('Programming: audit');

        $role = Role::create(['name' => 'Programación Numérica: Revisor', 'description' => '']);
        $role->givePermissionTo('Programming: view');
        $role->givePermissionTo('ProgrammingItem: view');
        $role->givePermissionTo('Programming: report');
        $role->givePermissionTo('Reviews: view');
        $role->givePermissionTo('Reviews: edit');
        $role->givePermissionTo('ProgrammingItem: evaluate');
        $role->givePermissionTo('Reviews: create');
        $role->givePermissionTo('Reviews: delete');

        $role = Role::create(['name' => 'Programación Numérica: Usuario Básico', 'description' => '']);
        $role->givePermissionTo('Programming: view');
        $role->givePermissionTo('ProgrammingItem: edit');
        $role->givePermissionTo('ProgrammingItem: delete');
        $role->givePermissionTo('ProfessionalHour: view');
        $role->givePermissionTo('ProgrammingDay: view');
        $role->givePermissionTo('ProgrammingItem: view');
        $role->givePermissionTo('TrainingItem: view');
        $role->givePermissionTo('Reviews: view');
        $role->givePermissionTo('ProgrammingItem: evaluate');
        $role->givePermissionTo('ProgrammingItem: duplicate');
        $role->givePermissionTo('Reviews: rectify');

        $role = Role::create(['name' => 'Programación Numérica: Usuario Comunal', 'description' => '']);
        $role->givePermissionTo('Programming: view');
        $role->givePermissionTo('ProgrammingItem: edit');
        $role->givePermissionTo('ProgrammingItem: delete');
        $role->givePermissionTo('ProfessionalHour: view');
        $role->givePermissionTo('ProgrammingDay: view');
        $role->givePermissionTo('ProgrammingItem: view');
        $role->givePermissionTo('TrainingItem: view');
        $role->givePermissionTo('Programming: report');
        $role->givePermissionTo('Communefiles: upload');
        $role->givePermissionTo('Reviews: view');
        $role->givePermissionTo('ProgrammingItem: evaluate');
        $role->givePermissionTo('ProgrammingItem: duplicate');
        $role->givePermissionTo('Reviews: rectify');
        $role->givePermissionTo('TrainingItem: edit');

        $role = Role::create(['name' => 'Recursos: administrador', 'description' => 'Manager de computadores, impresoras, telefonos, etc.']);
        $role->givePermissionTo('Resources: create');
        $role->givePermissionTo('Resources: edit');
        $role->givePermissionTo('Resources: delete');

        $role = Role::create(['name' => 'Replacement Staff: admin', 'description' => '']);
        $role->givePermissionTo('Replacement Staff: create request');
        $role->givePermissionTo('Replacement Staff: list rrhh');
        $role->givePermissionTo('Replacement Staff: technical evaluation');
        $role->givePermissionTo('Replacement Staff: manage');
        $role->givePermissionTo('Replacement Staff: assign request');
        $role->givePermissionTo('Replacement Staff: staff manage');
        $role->givePermissionTo('Replacement Staff: create staff');
        $role->givePermissionTo('Replacement Staff: admin');

        $role = Role::create(['name' => 'Replacement Staff: personal', 'description' => 'Permite visualizar requerimientos']);
        $role->givePermissionTo('Replacement Staff: view requests');

        $role = Role::create(['name' => 'Replacement Staff: personal sign', 'description' => 'Permite aceptar y visualizar requerimientos en la unidad de personal']);
        $role->givePermissionTo('Replacement Staff: view requests');
        $role->givePermissionTo('Replacement Staff: personal sign');

        $role = Role::create(['name' => 'Replacement Staff: user', 'description' => '']);
        $role->givePermissionTo('Replacement Staff: create request');

        $role = Role::create(['name' => 'Replacement Staff: user rys', 'description' => '']);
        $role->givePermissionTo('Replacement Staff: create request');
        $role->givePermissionTo('Replacement Staff: list rrhh');
        $role->givePermissionTo('Replacement Staff: technical evaluation');
        $role->givePermissionTo('Replacement Staff: manage');
        $role->givePermissionTo('Replacement Staff: view requests');
        $role->givePermissionTo('Replacement Staff: staff manage');

        $role = Role::create(['name' => 'Secretaria', 'description' => '']);
        $role->givePermissionTo('OrganizationalUnits: create');
        $role->givePermissionTo('OrganizationalUnits: edit');
        $role->givePermissionTo('OrganizationalUnits: delete');
        $role->givePermissionTo('Documents: create');
        $role->givePermissionTo('Documents: edit');
        $role->givePermissionTo('Calendar: view');
        $role->givePermissionTo('Authorities: view');
        $role->givePermissionTo('Authorities: create');
        $role->givePermissionTo('Requirements: create');
        $role->givePermissionTo('Documents: signatures and distribution');
        $role->givePermissionTo('Authorities: edit');
        $role->givePermissionTo('Receptions: user');

        $role = Role::create(['name' => 'Secretaria Dirección', 'description' => 'Secretaria Dirección']);
        $role->givePermissionTo('Documents: create');
        $role->givePermissionTo('Documents: edit');
        $role->givePermissionTo('Calendar: view');
        $role->givePermissionTo('Authorities: view');
        $role->givePermissionTo('Authorities: create');
        $role->givePermissionTo('Requirements: create');
        $role->givePermissionTo('Partes: user');
        $role->givePermissionTo('Partes: director');
        $role->givePermissionTo('Partes: oficina');
        $role->givePermissionTo('Service Request');
        $role->givePermissionTo('Service Request: consolidated data');
        $role->givePermissionTo('Documents: signatures and distribution');
        $role->givePermissionTo('Service Request: additional data');
        $role->givePermissionTo('Requirements: delete');
        $role->givePermissionTo('Service Request: additional data rrhh');
        $role->givePermissionTo('Service Request: additional data finanzas');
        $role->givePermissionTo('Service Request: additional data oficina partes');
        $role->givePermissionTo('Service Request: pending requests');
        $role->givePermissionTo('Service Request: audit');
        $role->givePermissionTo('Service Request: fulfillments');
        $role->givePermissionTo('Service Request: derive requests');
        $role->givePermissionTo('Service Request: sign document');
        $role->givePermissionTo('Service Request: transfer requests');
        $role->givePermissionTo('Service Request: with resolution');
        $role->givePermissionTo('Service Request: maintainers');
        $role->givePermissionTo('Service Request: report to pay');
        $role->givePermissionTo('Service Request: report payed');
        $role->givePermissionTo('Service Request: turno de llamado');
        $role->givePermissionTo('Service Request: change signature flow');
        $role->givePermissionTo('Replacement Staff: create request');
        $role->givePermissionTo('Partes: delete');
        $role->givePermissionTo('Request Forms: all');
        $role->givePermissionTo('Summary: user');
        $role->givePermissionTo('Summary: admin viewer');
        $role->givePermissionTo('Allowances: director');

        $role = Role::create(['name' => 'Secretaria TIC', 'description' => '']);
        $role->givePermissionTo([
            'be god',
            'Users: create',
            'Users: edit',
            'Users: delete',
            'OrganizationalUnits: create',
            'OrganizationalUnits: edit',
            'OrganizationalUnits: delete',
            'Documents: create',
            'Documents: edit',
            'Resources: create',
            'Resources: edit',
            'Resources: delete',
            'Calendar: view',
            'Authorities: view',
            'Authorities: create',
            'Requirements: create',
            'Users: assign permission',
            'Service Request',
            'Documents: signatures and distribution',
            'Requirements: delete',
            'Service Request: fulfillments',
            'Service Request: fulfillments responsable',
            'Authorities: edit',
            'Documents: delete document',
            'Parameters: programs',
            'Parameters: locations',
            'Parameters: places',
            'Parameters: UNSPSC',
            'Parameters: holidays',
            'Users: send mail verification',
            'Users: reset password option',
            'OrganizationalUnits: sirh association',
            'Purchase Plan: create',
            'Receptions: user',
            'Receptions: load support file',
            'News: create',
            'Users: assign roles',
            'Documents: admin',
        ]);

        $role = Role::create(['name' => 'Store: admin', 'description' => '']);

        $role = Role::create(['name' => 'Store: Super admin', 'description' => '']);

        $role = Role::create(['name' => 'Store: user', 'description' => '']);
        $role->givePermissionTo('Store: index');
        $role->givePermissionTo('Store');
        $role->givePermissionTo('Store: list receptions');
        $role->givePermissionTo('Store: list dispatchs');
        $role->givePermissionTo('Store: bincard report');

        $role = Role::create(['name' => 'Usuario Administrador', 'description' => 'Administrar usuarios, unidades organizacionales y autoridades']);
        $role->givePermissionTo([
            'Users: create',
            'Users: edit',
            'Users: delete',
            'OrganizationalUnits: create',
            'OrganizationalUnits: edit',
            'OrganizationalUnits: delete',
            'Authorities: view',
            'Authorities: create',
            'Authorities: edit',
            'Users: send mail verification',
            'Users: reset password option',
            'OrganizationalUnits: sirh association',
            'Users: assign roles',
        ]);

        $role = Role::create(['name' => 'Usuario Básico', 'description' => 'Calendario, Documentos, Firmas y SGR']);
        $role->givePermissionTo('Documents: create');
        $role->givePermissionTo('Documents: edit');
        $role->givePermissionTo('Calendar: view');
        $role->givePermissionTo('Authorities: view');
        $role->givePermissionTo('Requirements: create');
        $role->givePermissionTo('Documents: signatures and distribution');
        $role->givePermissionTo('Receptions: user');

        $role = Role::create(['name' => 'Usuario Semi Administrador', 'description' => 'Administrar usuarios, unidades organizacionales y autoridad (No puede borrar)']);
        $role->givePermissionTo([
            'Users: create',
            'Users: edit',
            'OrganizationalUnits: create',
            'OrganizationalUnits: edit',
            'Authorities: view',
            'Authorities: create',
            'Authorities: edit',
            'Users: send mail verification',
            'Users: reset password option',
            'OrganizationalUnits: sirh association',
            'Users: assign roles',
        ]);


        // GOD LIKE
        $role = Role::create(['name' => 'god', 'description' => 'God Mode !']);
        $role->givePermissionTo(Permission::all());
    }
}
