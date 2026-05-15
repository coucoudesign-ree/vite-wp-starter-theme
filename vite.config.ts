import { defineConfig, loadEnv } from "vite";
import path from "path";

export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd(), "");
  const wpUrl = env.VITE_WP_URL || "http://vite-wp-starter.local";

  return {
    base: "./",
    root: ".",

    server: {
      port: 5174,
      strictPort: true,
      cors: true,
      origin: "http://localhost:5174",
      hmr: {
        host: "localhost",
      },
      proxy: {
        "^/(?!@vite|src|node_modules|@scss|@assets).*": {
          target: wpUrl,
          changeOrigin: true,
        },
      },
      fs: {
        allow: [
          path.resolve(__dirname, "."),
          path.resolve(__dirname, "src"),
        ],
      },
    },

    build: {
      outDir: "assets",
      emptyOutDir: true,
      rollupOptions: {
        input: {
          main:  path.resolve(__dirname, "src/ts/main.ts"),
          style: path.resolve(__dirname, "src/scss/style.scss"),
        },
        output: {
          assetFileNames: "[name].[ext]",
          chunkFileNames: "[name].js",
          entryFileNames: "[name].js",
        },
      },
    },

    resolve: {
      alias: {
        "@":      path.resolve(__dirname, "./src"),
        "@scss":  path.resolve(__dirname, "./src/scss"),
        "@assets": path.resolve(__dirname, "./src/assets"),
      },
    },

    css: {
      devSourcemap: true,
      preprocessorOptions: {
        scss: {
          additionalData: `
            @use "@scss/settings/_variables.scss" as *;
            @use "@scss/settings/_mixins.scss" as *;
          `,
        },
      },
    },

    plugins: [],
  };
});
