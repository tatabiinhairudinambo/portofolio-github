"use client";

import React from "react";

export default function FooterSection() {
  return (
    <section
      id="section-contact"
      className="panel w-full min-h-screen md:w-screen md:h-screen flex-shrink-0 relative overflow-hidden flex flex-col justify-between bg-[#0A0A0A] text-[#FFFFFF] px-6 sm:px-12 md:px-24 py-16 md:py-12 select-none"
    >
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[60vw] h-[60vw] bg-[#E6DFD3]/5 rounded-full blur-[140px] pointer-events-none" />
      <div className="absolute bottom-0 left-0 w-[40vw] h-[40vw] bg-[#FFFFFF]/5 rounded-full blur-[120px] pointer-events-none" />

      <div className="flex flex-col sm:flex-row sm:items-center justify-between border-b border-[#E6DFD3]/15 pb-6 gap-4 relative z-10">
        <div className="flex items-center gap-3 stagger-item">
          <span className="relative flex h-3 w-3">
            <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span className="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
          </span>
          <span className="font-mono text-xs md:text-sm tracking-[0.25em] text-[#E6DFD3] uppercase font-bold">
            {'// TERBUKA UNTUK KOLABORASI'}
          </span>
        </div>
        <div className="font-mono text-xs text-[#E6DFD3]/70 uppercase tracking-widest stagger-item">
          Indonesia
        </div>
      </div>

      <div className="my-auto flex flex-col items-center justify-center text-center relative z-10 py-6">
        <div className="relative flex flex-col items-center justify-center">
          <div className="z-10">
            <h2 className="thank-title main-title section-title text-6xl sm:text-7xl md:text-9xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.85] text-[#FFFFFF] select-none">
              THANK
            </h2>
          </div>

          <div className="z-20 relative -mt-8 sm:-mt-12 md:-mt-20 -mb-8 sm:-mb-12 md:-mb-20 w-48 sm:w-56 md:w-72 h-48 sm:h-56 md:h-72 pointer-events-none flex items-center justify-center">
            <img
              src="/profile.svg"
              alt="Abram Doli S."
              className="w-full h-full object-contain object-bottom pointer-events-none select-none"
            />
          </div>

          <div className="z-30 relative -mt-4 sm:-mt-6 md:-mt-10">
            <h2 className="you-title text-6xl sm:text-7xl md:text-9xl lg:text-[10rem] font-black tracking-tighter uppercase leading-[0.85] text-transparent stroke-text select-none">
              YOU
            </h2>
          </div>
        </div>
      </div>

      <div className="border-t border-[#E6DFD3]/15 pt-6 flex flex-col md:flex-row items-center justify-between gap-6 relative z-10 text-center md:text-left">
        <div className="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 font-mono text-xs text-[#E6DFD3]/70 uppercase tracking-widest stagger-item">
          <span>&copy; 2026 ABRAM DOLI S.</span>
          <span className="hidden sm:inline text-[#E6DFD3]/30">|</span>
          <span>Full-Stack Programmer</span>
        </div>

        <div className="flex items-center gap-3 flex-wrap justify-center stagger-item">
          <a
            href="https://github.com"
            target="_blank"
            rel="noopener noreferrer"
            className="flex items-center gap-2 px-4 py-2 rounded-full bg-[#141414] border border-[#E6DFD3]/20 hover:border-[#E6DFD3] text-[#FFFFFF] hover:text-[#E6DFD3] font-mono text-xs transition-all duration-300"
          >
            <svg className="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
            </svg>
            <span>GitHub</span>
          </a>

          <a
            href="https://linkedin.com"
            target="_blank"
            rel="noopener noreferrer"
            className="flex items-center gap-2 px-4 py-2 rounded-full bg-[#141414] border border-[#E6DFD3]/20 hover:border-[#E6DFD3] text-[#FFFFFF] hover:text-[#E6DFD3] font-mono text-xs transition-all duration-300"
          >
            <svg className="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
            </svg>
            <span>LinkedIn</span>
          </a>

          <a
            href="mailto:abramdoli@example.com"
            className="flex items-center gap-2 px-4 py-2 rounded-full bg-[#141414] border border-[#E6DFD3]/20 hover:border-[#E6DFD3] text-[#FFFFFF] hover:text-[#E6DFD3] font-mono text-xs transition-all duration-300"
          >
            <svg className="w-4 h-4 fill-current" viewBox="0 0 24 24">
              <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
            </svg>
            <span>Email</span>
          </a>
        </div>
      </div>
    </section>
  );
}
