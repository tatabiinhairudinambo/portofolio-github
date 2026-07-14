"use client";

import React from "react";
import { ArrowUpRight, Briefcase, Calendar } from "lucide-react";

export default function ProjectsSection() {
  const workExperience = [
    {
      role: "Full-Stack Developer",
      company: "Freelance / Project-Based",
      year: "2023 - Sekarang",
      description: "Mengembangkan berbagai aplikasi web full-stack untuk klien, termasuk sistem e-commerce, manajemen inventaris, dan platform kolaborasi tim.",
    },
    {
      role: "Network Engineer Intern",
      company: "Ex-Telkomsel",
      year: "2022",
      description: "Bertanggung jawab dalam konfigurasi jaringan, monitoring infrastruktur ISP, dan pengelolaan perangkat Mikrotik untuk layanan internet skala enterprise.",
    },
    {
      role: "Web Developer",
      company: "Various Projects",
      year: "2021 - 2023",
      description: "Membangun dan memelihara website company profile, sistem informasi sekolah, dan aplikasi manajemen data berbasis web menggunakan PHP, Laravel, dan MySQL.",
    },
  ];

  const projects = [
    {
      id: "01",
      title: "Enterprise E-Commerce System",
      category: "Web App",
      description: "Platform e-commerce berskala besar dengan manajemen inventaris real-time, integrasi payment gateway, dan dashboard analitik.",
      tags: ["Laravel", "Vue.js", "PostgreSQL", "Redis"],
    },
    {
      id: "02",
      title: "Smart Task Management App",
      category: "Web App",
      description: "Aplikasi kolaborasi tim dengan papan Kanban interaktif, pelacakan produktivitas, dan notifikasi real-time.",
      tags: ["React", "Node.js", "Socket.io", "Tailwind"],
    },
    {
      id: "03",
      title: "ISP Billing & Network Management",
      category: "Network",
      description: "Sistem automasi billing ISP dan manajemen bandwidth berbasis Mikrotik RouterOS API dengan monitoring trafik real-time.",
      tags: ["Laravel", "Mikrotik API", "MySQL", "Bootstrap"],
    },
    {
      id: "04",
      title: "Real Estate Portal & Booking Engine",
      category: "Web App",
      description: "Portal properti interaktif dengan pemetaan lokasi, filter multi-kriteria, dan sistem reservasi survei properti.",
      tags: ["Next.js", "TypeScript", "Prisma", "Tailwind"],
    },
  ];

  return (
    <section
      id="section-projects"
      className="panel w-full min-h-screen md:w-screen md:h-screen flex-shrink-0 relative overflow-hidden flex flex-col bg-[#0A0A0A] text-[#FFFFFF] px-6 sm:px-12 md:px-20 py-20 md:py-12"
    >
      <div className="absolute top-1/3 left-1/3 w-[45vw] h-[45vw] bg-[#E6DFD3]/5 rounded-full blur-[150px] pointer-events-none" />
      <div className="absolute bottom-10 right-10 w-80 h-80 bg-[#FFFFFF]/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="w-full max-w-7xl mx-auto mb-6 md:mb-8 flex flex-col sm:flex-row sm:items-end justify-between border-b border-[#E6DFD3]/15 pb-6">
        <div>
          <span className="font-mono text-xs tracking-[0.35em] text-[#E6DFD3]/60 uppercase block mb-2 font-bold stagger-item">
            {'// 04. Pengalaman Kerja & Proyek'}
          </span>
          <h2 className="section-title main-title text-4xl sm:text-5xl md:text-7xl font-black text-[#FFFFFF] tracking-tighter uppercase leading-none">
            WORK <span className="text-[#E6DFD3]">EXPERIENCE</span>
          </h2>
        </div>
      </div>

      <div className="w-full max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-5 gap-8 relative z-10 flex-1">
        <div className="lg:col-span-2 flex flex-col space-y-4 overflow-y-auto">
          <div className="flex items-center gap-3 pl-2 border-l-4 border-[#E6DFD3] mb-1 stagger-item">
            <Briefcase className="w-5 h-5 text-[#E6DFD3]" />
            <h3 className="text-xl md:text-2xl font-extrabold tracking-tight text-[#E6DFD3] uppercase">
              PENGALAMAN <span className="text-[#FFFFFF]">KERJA</span>
            </h3>
          </div>

          <div className="space-y-4">
            {workExperience.map((exp, idx) => (
              <div
                key={idx}
                className="project-card bg-[#141414]/90 border border-[#E6DFD3]/15 rounded-2xl p-5 hover:border-[#E6DFD3]/40 transition-all duration-300 shadow-[0_10px_30px_rgba(0,0,0,0.5)] group backdrop-blur-md"
              >
                <div className="flex items-start justify-between mb-2">
                  <div>
                    <h4 className="font-bold text-sm md:text-base text-[#FFFFFF] group-hover:text-[#E6DFD3] transition-colors">
                      {exp.role}
                    </h4>
                    <p className="font-mono text-xs text-[#E6DFD3]/80 mt-0.5">{exp.company}</p>
                  </div>
                </div>
                <div className="flex items-center gap-2 text-[10px] font-mono text-[#E6DFD3]/60 uppercase tracking-wider mb-2">
                  <Calendar className="w-3 h-3" />
                  {exp.year}
                </div>
                <p className="text-xs text-[#E6DFD3]/70 font-light leading-relaxed project-detail">
                  {exp.description}
                </p>
              </div>
            ))}
          </div>
        </div>

        <div className="lg:col-span-3 flex flex-col space-y-4">
          <div className="flex items-center gap-3 pl-2 border-l-4 border-[#FFFFFF] mb-1 stagger-item">
            <h3 className="text-xl md:text-2xl font-extrabold tracking-tight text-[#FFFFFF] uppercase">
              PROYEK <span className="text-[#E6DFD3]">APLIKASI</span>
            </h3>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
            {projects.map((project, idx) => (
              <div
                key={project.id}
                className="project-card bg-[#141414]/90 border border-[#E6DFD3]/15 rounded-2xl overflow-hidden hover:border-[#E6DFD3]/40 transition-all duration-500 shadow-[0_15px_35px_rgba(0,0,0,0.6)] group backdrop-blur-xl"
              >
                <div className="relative h-32 bg-[#0E0E0E] border-b border-[#E6DFD3]/10 overflow-hidden flex flex-col justify-between p-4">
                  <div className="flex items-center justify-between">
                    <div className="flex items-center gap-1.5">
                      <span className="w-2 h-2 rounded-full bg-rose-500/70" />
                      <span className="w-2 h-2 rounded-full bg-amber-500/70" />
                      <span className="w-2 h-2 rounded-full bg-emerald-500/70" />
                    </div>
                    <span className="font-mono text-[10px] text-[#E6DFD3]/60 uppercase tracking-wider">
                      proj/{project.id}
                    </span>
                    <ArrowUpRight className="w-3 h-3 text-[#E6DFD3]/50 group-hover:text-[#E6DFD3] transition-colors" />
                  </div>
                  <div className="mt-2 rounded-lg bg-[#080808]/90 border border-[#E6DFD3]/10 p-3 group-hover:scale-[1.02] transition-transform duration-500">
                    <div className="flex items-center gap-2 mb-2">
                      <span className="font-mono text-[10px] font-bold text-[#FFFFFF] tracking-wider">
                        {project.category}
                      </span>
                      <span className="text-[8px] font-mono bg-[#E6DFD3]/10 text-[#E6DFD3] px-1.5 py-0.5 rounded uppercase font-semibold">
                        Live
                      </span>
                    </div>
                    <div className="w-4/5 h-2 bg-[#FFFFFF]/80 rounded" />
                    <div className="w-3/5 h-1.5 bg-[#E6DFD3]/50 rounded mt-1" />
                  </div>
                </div>

                <div className="p-4">
                  <div className="flex items-center justify-between mb-1">
                    <span className="font-mono text-[10px] tracking-widest text-[#E6DFD3] uppercase font-bold">
                      {`// #${project.id}`}
                    </span>
                  </div>
                  <h3 className="text-sm font-bold text-[#FFFFFF] tracking-tight group-hover:text-[#E6DFD3] transition-colors leading-snug project-detail">
                    {project.title}
                  </h3>
                  <p className="mt-1.5 text-[11px] text-[#E6DFD3]/75 font-light leading-relaxed line-clamp-2 project-detail">
                    {project.description}
                  </p>
                  <div className="mt-3 flex flex-wrap gap-1 project-detail">
                    {project.tags.map((tag, tIdx) => (
                      <span
                        key={tIdx}
                        className="text-[9px] font-mono bg-[#0A0A0A] text-[#E6DFD3]/90 border border-[#E6DFD3]/20 px-2 py-0.5 rounded-full uppercase font-medium"
                      >
                        {tag}
                      </span>
                    ))}
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
}
