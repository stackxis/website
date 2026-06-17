<?php

namespace Database\Seeders;

use App\Models\JobPosting;
use Illuminate\Database\Seeder;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Senior Full-Stack Engineer',
                'tags' => 'Remote · Next.js / Node.js · Full-Time',
                'description' => 'Lead the architecture and development of custom SaaS and ERP platforms.',
                'apply_url' => 'mailto:careers@stackxis.com?subject=Application%3A%20Senior%20Full-Stack%20Engineer',
                'date_posted' => '2025-06-01',
                'valid_through' => '2025-12-31',
                'employment_type' => 'FULL_TIME',
                'identifier' => 'full-stack-01',
                'sort_order' => 0,
            ],
            [
                'title' => 'Cloud & DevOps Architect',
                'tags' => 'Remote · AWS / Kubernetes · Full-Time',
                'description' => 'Design, deploy, and scale zero-downtime infrastructure for enterprise clients.',
                'apply_url' => 'mailto:careers@stackxis.com?subject=Application%3A%20Cloud%20%26%20DevOps%20Architect',
                'date_posted' => null,
                'valid_through' => null,
                'employment_type' => 'FULL_TIME',
                'identifier' => 'devops-01',
                'sort_order' => 1,
            ],
            [
                'title' => 'General Application',
                'tags' => 'Remote · Engineering / Design',
                'description' => "Don't see a perfect fit? We are always looking for exceptional senior talent. Send us your GitHub and let's talk.",
                'apply_url' => 'mailto:careers@stackxis.com?subject=General%20Application',
                'date_posted' => null,
                'valid_through' => null,
                'employment_type' => 'FULL_TIME',
                'identifier' => 'general-01',
                'sort_order' => 2,
            ],
        ];

        foreach ($jobs as $job) {
            JobPosting::query()->updateOrCreate(
                ['title' => $job['title']],
                array_merge($job, ['is_published' => true]),
            );
        }
    }
}
