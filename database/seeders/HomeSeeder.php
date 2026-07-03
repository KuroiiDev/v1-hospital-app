<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeText;
use App\Models\HomeCard;
use App\Models\HomeDoctor;
use App\Models\HomeTestimony;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{

    public function run(): void
    {
        $texts = [
            'hero_badge'       => 'PRESIDENT UNIVERSITY RESEARCH & TEACHING HOSPITAL',
            'hero_title'       => 'PURTH',
            'hero_desc'        => 'Advancing Healthcare Through Education, Research, and Innovation',
            'hero_btn_1_text'  => 'About PURTH',
            'hero_btn_2_text'  => 'Contact Us',
            
            'about_badge'      => 'About PURTH',
            'about_title'      => 'Welcome to PURTH',
            'about_desc'       => 'President University Research & Teaching Hospital (PURTH) is a general hospital that integrates high-quality healthcare services with education, research, and community engagement as the teaching hospital of the Faculty of Medicine, President University. Guided by the Academic Health System concept, PURTH brings together clinical care, medical education, clinical research, and healthcare innovation within a collaborative ecosystem. This integrated approach enables patients to receive evidence-based medical care while providing an excellent learning environment for medical students, healthcare professionals, and researchers.',
            
            'academic_badge'   => 'Education & Research',
            'academic_title'   => 'Advancing Healthcare Through Innovation',
            'academic_desc'    => 'As a teaching hospital, PURTH plays a strategic role in advancing medical education, research, and healthcare innovation through: Clinical education for medical students, clinical research to support evidence-based medicine, professional training, and national/international academic collaborations.',
            'vision_text'      => 'To become an internationally recognized teaching hospital, distinguished for excellence in healthcare services, medical education, research, and innovation, improving the quality of life of the community while strengthening regional competitiveness.',
            
            'services_badge'   => 'Medical Services',
            'services_title'   => 'Our Comprehensive Medical Offerings',
            
            'doctors_badge'    => 'Hospital Leadership',
            'doctors_title'    => 'Board of Directors',
            
            'testimony_badge'  => 'Testimonial',
            'testimony_title'  => 'Patients Say About Our Services',

            'contact_badge'    => 'Contact Us',
            'contact_title'    => 'Please Feel Free To Contact Us',
            'contact_address'  => 'Jababeka Industrial Township, Cikarang, Bekasi, Indonesia',
            'contact_email'    => 'purth@president.ac.id',
            'contact_phone'    => '+62 21-8984-0530',
            'contact_map_url'  => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1818274712574!2d107.1687352!3d-6.2863773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6985aee2eec2df%3A0x6bda194fbcff3b4b!2sPresident%20University!5e0!3m2!1sen!2sid!4v1699999999999!5m2!1sen!2sid',
        ];

        foreach ($texts as $id => $value) {
            HomeText::updateOrCreate(['id' => $id], ['value' => $value]);
        }

        // Clean tables
        DB::table('home_cards')->truncate();
        DB::table('home_doctors')->truncate();
        DB::table('home_testimonies')->truncate();

        $aboutCards = [
            ['icon' => 'fas fa-university', 'title' => 'Academic Teaching Hospital', 'text' => null, 'sort_order' => 1],
            ['icon' => 'fas fa-hospital-alt', 'title' => 'Modern Medical Facilities', 'text' => null, 'sort_order' => 2],
            ['icon' => 'fas fa-user-md', 'title' => 'Experienced Medical Professionals', 'text' => null, 'sort_order' => 3],
            ['icon' => 'fas fa-microscope', 'title' => 'Evidence-Based Healthcare', 'text' => null, 'sort_order' => 4],
        ];

        foreach ($aboutCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'about']));
        }

        $missionCards = [
            ['icon' => 'fas fa-check-circle', 'title' => 'Quality Healthcare', 'text' => 'To deliver professional, safe, high-quality, and patient-centered healthcare services.', 'sort_order' => 1],
            ['icon' => 'fas fa-check-circle', 'title' => 'Clinical Education', 'text' => 'To serve as the primary teaching hospital for the Faculty of Medicine, President University, by providing excellence in clinical education and training.', 'sort_order' => 2],
            ['icon' => 'fas fa-check-circle', 'title' => 'Research & Innovation', 'text' => 'To advance healthcare research and innovation that contribute to the well-being of society and the development of the healthcare industry.', 'sort_order' => 3],
            ['icon' => 'fas fa-check-circle', 'title' => 'Strategic Partnerships', 'text' => 'To establish strategic partnerships with academic institutions, healthcare organizations, government agencies, industry, and international partners.', 'sort_order' => 4],
            ['icon' => 'fas fa-check-circle', 'title' => 'Professional Development', 'text' => 'To develop healthcare professionals who demonstrate integrity, professionalism, adaptability to emerging healthcare technologies, and a global perspective.', 'sort_order' => 5],
            ['icon' => 'fas fa-check-circle', 'title' => 'Hospital Governance', 'text' => 'To implement effective, transparent, accountable, and sustainable hospital governance.', 'sort_order' => 6],
        ];

        foreach ($missionCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'mission']));
        }

        $coreValuesCards = [
            ['icon' => 'fas fa-star', 'title' => 'P – Professionalism', 'text' => 'Delivering healthcare services in accordance with the highest professional standards and ethical principles.', 'sort_order' => 1],
            ['icon' => 'fas fa-star', 'title' => 'R – Respect', 'text' => 'Treating every patient, family member, and healthcare professional with dignity, respect, and compassion.', 'sort_order' => 2],
            ['icon' => 'fas fa-star', 'title' => 'E – Excellence', 'text' => 'Striving for excellence through continuous quality improvement, innovation, and outstanding performance.', 'sort_order' => 3],
            ['icon' => 'fas fa-star', 'title' => 'S – Service', 'text' => 'Providing compassionate, responsive, and patient-centered care with sincerity and dedication.', 'sort_order' => 4],
            ['icon' => 'fas fa-star', 'title' => 'I – Integrity', 'text' => 'Upholding honesty, accountability, transparency, and ethical conduct in every aspect of our work.', 'sort_order' => 5],
            ['icon' => 'fas fa-star', 'title' => 'D – Development', 'text' => 'Fostering continuous growth through education, research, innovation, and lifelong learning.', 'sort_order' => 6],
            ['icon' => 'fas fa-star', 'title' => 'E – Empathy', 'text' => 'Understanding and responding to the needs of patients and their families with compassion and kindness.', 'sort_order' => 7],
            ['icon' => 'fas fa-star', 'title' => 'N – Networking', 'text' => 'Building strong partnerships and collaborations with national and international institutions to advance healthcare, education, and research.', 'sort_order' => 8],
            ['icon' => 'fas fa-star', 'title' => 'T – Trust', 'text' => 'Earning and maintaining the trust of our patients, partners, and communities through excellence, reliability, and integrity.', 'sort_order' => 9],
        ];

        foreach ($coreValuesCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'core_values']));
        }

        $serviceCards = [
            ['icon' => 'fas fa-briefcase-medical', 'title' => 'General Services', 'text' => 'General Practitioner, Medical Check Up, Emergency Services, Laboratory, Pharmacy, Radiology', 'sort_order' => 1],
            ['icon' => 'fas fa-stethoscope', 'title' => 'Specialist Services', 'text' => 'Pediatrics, Internal Medicine, General Surgery, Obstetrics & Gynecology', 'sort_order' => 2],
        ];

        foreach ($serviceCards as $card) {
            HomeCard::create(array_merge($card, ['section' => 'service']));
        }

        $doctors = [
            [
                'image'      => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Johanes Poso',
                'title'      => 'President Director',
                'text'       => 'Johanes Poso is the Founder and President Director of PT Rumah Prima Sehat. With decades of experience in healthcare development, he has successfully built and expanded healthcare facilities from a community pharmacy into a modern hospital network. His leadership is driven by a commitment to delivering accessible, high-quality, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 1
            ],
            [
                'image'      => 'https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Setiawan Mardjuki',
                'title'      => 'Director',
                'text'       => 'Setiawan Mardjuki is an experienced executive with extensive expertise in industrial estate development, real estate, investment, and corporate management. He holds a Master of Computer Science and a Master of Finance from California State University, USA. At PT Rumah Prima Sehat, he provides strategic leadership to support sustainable growth and the delivery of high-quality healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 2
            ],
            [
                'image'      => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Theodora Elyas, Apt., S.Farm.',
                'title'      => 'Hospital Director',
                'text'       => 'Theodora Elyas is a licensed pharmacist with extensive experience in hospital support services and healthcare operations. She is committed to strengthening clinical support, operational excellence, and quality standards to ensure safe, efficient, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 3
            ],
            [
                'image'      => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80',
                'name'       => 'Agus Baharudin Soleh, S.Pd., M.M.',
                'title'      => 'Vice Director of General Affair',
                'text'       => 'Agus Baharudin Soleh is a healthcare and hospitality management professional with over 15 years of leadership experience in operations, project management, and organizational development. He holds a Master of Management from President University and a Bachelor of Education from Mathla\'ul Anwar University. As Hospital Vice Director, he is committed to driving operational excellence, innovation, and patient-centered healthcare services.',
                'twitter'    => '#',
                'fb'         => '#',
                'linkedin'   => '#',
                'sort_order' => 4
            ],
        ];

        foreach ($doctors as $doctor) {
            HomeDoctor::create($doctor);
        }
    }
    
}