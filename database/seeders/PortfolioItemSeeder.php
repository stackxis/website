<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;

class PortfolioItemSeeder extends Seeder
{
    public function run(): void
    {
        $baseUrl = rtrim(config('app.url'), '/');

        PortfolioItem::query()->updateOrCreate(
            ['is_featured' => true, 'title' => 'Cloud-Native Inventory ERP'],
            [
                'categories' => ['cloud-erp'],
                'label' => 'Logistics & Supply Chain',
                'headline' => '40% reduction in global warehouse processing latency.',
                'summary' => 'Migrating a fragmented, on-premise inventory system handling 10M+ daily rows into a unified AWS architecture without halting daily operations.',
                'stack' => ['Node.js', 'PostgreSQL', 'AWS', 'Docker'],
                'url' => $baseUrl.'/work/logistics-cloud-erp',
                'is_published' => true,
                'sort_order' => 0,
            ],
        );

        $cards = [
            [
                'categories' => ['pos'],
                'industry' => 'Retail & Hospitality',
                'deployment_type' => 'POS Architecture',
                'year' => '2025',
                'metric' => 'Zero data loss during offline-to-online syncs.',
                'summary' => 'Engineered a high-throughput point-of-sale system across 50+ retail outlets. Built with real-time Redis caching and offline-first capabilities.',
                'stack' => ['React', 'TypeScript', 'Redis'],
                'url' => $baseUrl.'/work/retail-pos-system',
                'sort_order' => 1,
            ],
            [
                'categories' => ['saas', 'rescue'],
                'industry' => 'B2B SaaS Platform',
                'deployment_type' => 'Platform Modernization',
                'year' => '2025',
                'metric' => 'Zero-downtime monolith decomposition.',
                'summary' => 'Rescued a failing legacy monolith by decomposing it into scalable Kubernetes microservices, supporting a 300% surge in enterprise user traffic.',
                'stack' => ['Go', 'Kubernetes', 'GCP'],
                'url' => $baseUrl.'/work/saas-microservices-migration',
                'sort_order' => 2,
            ],
            [
                'categories' => ['web'],
                'industry' => 'Fintech & Healthcare',
                'deployment_type' => 'Digital Marketing & Web',
                'year' => '2024',
                'metric' => '240% increase in qualified enterprise pipeline.',
                'summary' => 'Designed a high-converting Next.js marketing hub and executed a technical SEO architecture to capture high-intent B2B search traffic.',
                'stack' => ['Next.js', 'Tailwind', 'SEO'],
                'url' => $baseUrl.'/work/fintech-marketing-hub',
                'sort_order' => 3,
            ],
            [
                'categories' => [],
                'industry' => 'Applied AI & Data',
                'deployment_type' => 'Data Engineering',
                'year' => '2024',
                'metric' => 'Automated 80% of manual reporting workflows.',
                'summary' => 'Deployed a secure, internal LLM and RAG system over existing enterprise data silos to automate complex financial reporting.',
                'stack' => ['Python', 'PostgreSQL', 'OpenAI API'],
                'url' => $baseUrl.'/work/ai-reporting-automation',
                'sort_order' => 4,
            ],
        ];

        foreach ($cards as $card) {
            PortfolioItem::query()->updateOrCreate(
                [
                    'is_featured' => false,
                    'metric' => $card['metric'],
                ],
                array_merge($card, [
                    'is_featured' => false,
                    'is_published' => true,
                ]),
            );
        }
    }
}
