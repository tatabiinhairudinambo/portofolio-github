"use client";

import React from "react";
import { Cpu, Zap, Layers, ShieldCheck, Compass, MessageSquare, GraduationCap, BookOpen } from "lucide-react";

export default function SkillsSection() {
  const educationData = [
    {
      school: "SMK YPPD Depok",
      major: "Teknik Komputer & Jaringan",
      year: "2018 - 2021",
      description: "Lulusan dengan fokus pada infrastruktur jaringan, administrasi server, dan dasar-dasar pemrograman.",
    },
    {
      school: "Course & Self-Learning",
      major: "Full-Stack Web Development",
      year: "2021 - Sekarang",
      description: "Belajar mandiri dan mengikuti berbagai kursus online tentang Laravel, React, Node.js, dan teknologi web modern.",
    },
    {
      school: "Ex-Telkomsel Network",
      major: "Network Engineer Internship",
      year: "2022",
      description: "Pengalaman praktis dalam manajemen jaringan skala enterprise, konfigurasi Mikrotik, dan monitoring infrastruktur.",
    },
  ];

  const hardSkillsGroups = [
    {
      category: "Backend & Database Engineering",
      icon: <Cpu className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "PHP & Laravel Framework",
        "Python & FastAPI / Automation",
        "MySQL & PostgreSQL",
        "Database Design & Optimization",
      ],
    },
    {
      category: "Frontend Development & UI",
      icon: <Zap className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "JavaScript ES6+ & TypeScript",
        "Vue.js 3 & React / Next.js",
        "HTML5 / CSS3 Modern",
        "Tailwind CSS & Bootstrap 5",
      ],
    },
    {
      category: "Tools, Network & DevOps",
      icon: <Layers className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "Git & Version Control",
        "Network Configuration & Mikrotik API",
        "Node.js & Express / Socket.io",
        "Docker & AI API Integration",
      ],
    },
  ];

  const softSkillsGroups = [
    {
      category: "Komunikasi & Kolaborasi Tim",
      icon: <Compass className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "Komunikasi Efektif dengan Klien",
        "Teamwork & Kolaborasi Lintas Peran",
        "Empati Pengguna & Analisis Kebutuhan",
        "Dokumentasi Teknis yang Jelas",
      ],
    },
    {
      category: "Penyelesaian Masalah & Eksekusi",
      icon: <ShieldCheck className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "Problem Solving Sistematis",
        "Attention to Detail untuk Clean Code",
        "Time Management Sesuai Deadline",
        "Adaptability & Cepat Belajar",
      ],
    },
    {
      category: "Inovasi & Etos Kerja Profesional",
      icon: <MessageSquare className="w-5 h-5 text-[#E6DFD3]" />,
      skills: [
        "Dedikasi pada Performa Aplikasi",
        "Eksplorasi AI & Machine Learning",
        "Pemahaman Arsitektur Client-Server",
        "Semangat Belajar Berkelanjutan",
      ],
    },
  ];

  return (
    <section
      id="section-skills"
      className="panel w-full min-h-screen md:w-screen md:h-screen flex-shrink-0 relative overflow-hidden flex flex-col justify-center bg-[#0A0A0A] text-[#FFFFFF] px-6 sm:px-12 md:px-20 py-20 md:py-12"
    >
      <div className="absolute bottom-0 right-1/4 w-[35vw] h-[35vw] bg-[#E6DFD3]/5 rounded-full blur-[130px] pointer-events-none" />
      <div className="absolute top-10 left-10 w-72 h-72 bg-[#FFFFFF]/5 rounded-full blur-[100px] pointer-events-none" />

      <div className="w-full max-w-7xl mx-auto mb-8 md:mb-10 flex flex-col sm:flex-row sm:items-end justify-between border-b border-[#E6DFD3]/15 pb-6">
        <div>
          <span className="font-mono text-xs tracking-[0.35em] text-[#E6DFD3]/60 uppercase block mb-2 font-bold stagger-item">
            {'// 03. Pendidikan & Keahlian'}
          </span>
          <h2 className="section-title main-title text-4xl sm:text-5xl md:text-7xl font-black text-[#FFFFFF] tracking-tighter uppercase leading-none">
            EDUCATION <span className="text-[#E6DFD3]">& SKILLS</span>
          </h2>
        </div>
      </div>

      <div className="w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-8 relative z-10 flex-1">
        <div className="lg:col-span-2 flex flex-col space-y-4">
          <div className="flex items-center gap-3 pl-2 border-l-4 border-[#E6DFD3] mb-2 stagger-item">
            <GraduationCap className="w-5 h-5 text-[#E6DFD3]" />
            <h3 className="text-xl md:text-2xl font-extrabold tracking-tight text-[#E6DFD3] uppercase">
              RIWAYAT <span className="text-[#FFFFFF]">PENDIDIKAN</span>
            </h3>
          </div>

          <div className="space-y-4">
            {educationData.map((edu, idx) => (
              <div
                key={idx}
                className="skill-card bg-[#141414]/90 border border-[#E6DFD3]/15 rounded-2xl p-5 hover:border-[#E6DFD3]/40 transition-all duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.5)] group backdrop-blur-md"
              >
                <div className="flex items-start justify-between mb-2">
                  <div>
                    <h4 className="font-bold text-sm md:text-base text-[#FFFFFF] group-hover:text-[#E6DFD3] transition-colors">
                      {edu.school}
                    </h4>
                    <p className="font-mono text-xs text-[#E6DFD3]/80 mt-0.5">{edu.major}</p>
                  </div>
                  <span className="font-mono text-[10px] text-[#E6DFD3]/50 bg-[#0A0A0A] px-2.5 py-1 rounded-full border border-[#E6DFD3]/10 whitespace-nowrap">
                    {edu.year}
                  </span>
                </div>
                <p className="text-xs text-[#E6DFD3]/70 font-light leading-relaxed mt-2">
                  {edu.description}
                </p>
                <div className="mt-3 flex items-center gap-2">
                  <BookOpen className="w-3.5 h-3.5 text-[#E6DFD3]/50" />
                  <span className="font-mono text-[10px] text-[#E6DFD3]/50 uppercase tracking-wider">
                    #{idx + 1}
                  </span>
                </div>
              </div>
            ))}
          </div>
        </div>

        <div className="lg:col-span-3 flex flex-col space-y-5">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div className="flex flex-col space-y-3">
              <div className="flex items-center gap-3 pl-2 border-l-4 border-[#E6DFD3] stagger-item">
                <h3 className="text-xl md:text-2xl font-extrabold tracking-tight text-[#E6DFD3] uppercase">
                  HARD <span className="text-[#FFFFFF]">SKILLS</span>
                </h3>
              </div>

              <div className="space-y-3">
                {hardSkillsGroups.map((group, idx) => (
                  <div
                    key={idx}
                    className="skill-card bg-[#141414]/90 border border-[#E6DFD3]/15 rounded-2xl p-4 hover:border-[#E6DFD3]/40 transition-all duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.5)] group backdrop-blur-md"
                  >
                    <div className="flex items-center gap-2 mb-2 pb-2 border-b border-[#E6DFD3]/10">
                      {group.icon}
                      <span className="font-bold text-xs tracking-wide text-[#FFFFFF] group-hover:text-[#E6DFD3] transition-colors">
                        {group.category}
                      </span>
                    </div>
                    <div className="space-y-1.5">
                      {group.skills.map((skill, sIdx) => (
                        <div
                          key={sIdx}
                          className="skill-item flex items-center gap-2 bg-[#0A0A0A]/80 border border-[#E6DFD3]/10 px-3 py-1.5 rounded-xl hover:border-[#E6DFD3]/30 transition-colors"
                        >
                          <div className="w-1.5 h-1.5 rounded-full bg-[#E6DFD3] flex-shrink-0" />
                          <span className="font-mono text-xs text-[#FFFFFF] tracking-wide">{skill}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                ))}
              </div>
            </div>

            <div className="flex flex-col space-y-3">
              <div className="flex items-center gap-3 pl-2 border-l-4 border-[#FFFFFF] stagger-item">
                <h3 className="text-xl md:text-2xl font-extrabold tracking-tight text-[#FFFFFF] uppercase">
                  SOFT <span className="text-[#E6DFD3]">SKILLS</span>
                </h3>
              </div>

              <div className="space-y-3">
                {softSkillsGroups.map((group, idx) => (
                  <div
                    key={idx}
                    className="skill-card bg-[#141414]/90 border border-[#E6DFD3]/15 rounded-2xl p-4 hover:border-[#E6DFD3]/40 transition-all duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.5)] group backdrop-blur-md"
                  >
                    <div className="flex items-center gap-2 mb-2 pb-2 border-b border-[#E6DFD3]/10">
                      {group.icon}
                      <span className="font-bold text-xs tracking-wide text-[#FFFFFF] group-hover:text-[#E6DFD3] transition-colors">
                        {group.category}
                      </span>
                    </div>
                    <div className="space-y-1.5">
                      {group.skills.map((skill, sIdx) => (
                        <div
                          key={sIdx}
                          className="skill-item flex items-center gap-2 bg-[#0A0A0A]/80 border border-[#E6DFD3]/10 px-3 py-1.5 rounded-xl hover:border-[#E6DFD3]/30 transition-colors"
                        >
                          <div className="w-1.5 h-1.5 rounded-full bg-[#E6DFD3] flex-shrink-0" />
                          <span className="font-mono text-xs text-[#FFFFFF] tracking-wide">{skill}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
