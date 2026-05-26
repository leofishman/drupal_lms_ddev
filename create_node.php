$node = \Drupal\node\Entity\Node::create([
  'type' => 'page',
  'title' => 'Certificación Profesional en Tecnología Automotriz',
  'langcode' => 'es',
  'status' => 1,
  'body' => [
    'value' => '<h2>Formación de vanguardia para el sector automotriz</h2><p>La industria automotriz atraviesa la transformación más profunda de su historia. El Vehículo Definido por Software (SDV) redefine los roles, competencias y estándares del sector. La CVA impulsa la formación continua para que técnicos, profesionales y empresas del ecosistema automotriz argentino lideren esta transición.</p><h2>¿Qué incluye la certificación?</h2><ul><li><strong>Fundamentos SDV</strong> — Arquitectura E/E, centralización de ECUs y plataformas HPC.</li><li><strong>Diagnóstico y conectividad</strong> — Protocolos CAN, LIN, Ethernet automotriz y actualizaciones OTA.</li><li><strong>Vehículos eléctricos e híbridos</strong> — Sistemas de tracción, gestión de baterías y carga.</li><li><strong>Seguridad funcional</strong> — Introducción a ISO 26262 y ciberseguridad automotriz ISO 21434.</li><li><strong>Evaluación final y certificado</strong> — Acredita competencias ante fabricantes, concesionarios y talleres de la red CVA.</li></ul><h2>¿A quién está dirigido?</h2><p>Técnicos y mecánicos con experiencia previa, profesionales de ingeniería automotriz, responsables de flotas y empresas que necesitan acreditar a su personal.</p><h2>Modalidad</h2><p>100% online con acceso desde cualquier dispositivo. Avanzá a tu ritmo con soporte de tutores especializados y evaluaciones prácticas al final de cada módulo.</p>',
    'format' => 'full_html',
  ],
  'path' => ['alias' => '/certificacion'],
]);
$node->save();
echo 'Nodo creado: nid=' . $node->id();
