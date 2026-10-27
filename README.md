# Devboard

Sistema pessoal para organizar os projetos em que participo: empresas, projetos, minha função em cada um e as tasks, do planejamento até a conclusão.

O objetivo é ter em um só lugar o histórico do que foi feito, quando e com qual papel, servindo tanto para acompanhar o trabalho do dia a dia quanto como registro para portfólio.

## Funcionalidades

### MVP

- Cadastro de empresas, com logo, cargo e período de vínculo
- Cadastro de projetos, vinculados ou não a uma empresa, com descrição, minha função, status, período e repositório
- Gestão de tasks por projeto, com status (todo, doing, done), prioridade, prazo e data de conclusão
- Autenticação de usuário
- Auditoria das alterações (quem mudou o quê e quando)

### Próximas etapas

- Anexos e evidências em projetos e tasks
- Dashboard com indicadores (tasks abertas, concluídas na semana, progresso por projeto)
- Lembretes de prazo e resumo semanal por email
- Exportação de relatório do projeto em PDF

## Stack

| Camada | Tecnologia | Responsabilidade |
|---|---|---|
| Backend | PHP 8.3+, Laravel 11+ | Regras de negócio, API, autorização e integrações |
| Frontend | Next.js 14+, TypeScript, Node 20+ | Interface web e experiência do usuário |
| Banco de dados | PostgreSQL 16+ | Dados transacionais e relacionamentos |
| Cache e filas | Redis 7+ | Cache, processamento assíncrono e filas |
| Autenticação | Laravel Sanctum | Sessão e autenticação da API |
| Armazenamento | S3 ou compatível (MinIO em desenvolvimento) | Logos, anexos, PDFs e evidências |
| API | REST com OpenAPI 3.1 | Contrato entre frontend e backend |
| Testes backend | Pest | Testes unitários e de integração |
| Testes frontend | Vitest e Playwright | Testes de componentes e de fluxos completos |
| Observabilidade | OpenTelemetry e Sentry | Logs, métricas, traces e alertas |
| Implantação | Docker e CI/CD | Ambientes reproduzíveis e entregas controladas |

## Estrutura

```
devboard/
├── api/   Backend Laravel
└── web/   Frontend Next.js
```

## Status

Em desenvolvimento.
